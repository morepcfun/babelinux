// ===================================================================================
// CONFIGURATION & STRINGS
// ===================================================================================

const config = {
    maxTabs: 5,
    hostname: 'aigirl.blog',
    defaultUsername: 'guest',
    defaultColor: '#33FF33',
    asciiWidth: 80,
    apps: {
        'tetris': 'https://morepcfun.github.io/tetris/'
    }
};

const text = {
    welcome: "Hey, cutie! What's your name?",
    bootingOS: "Starting BabeLinux...",
    authenticating: "Authenticating user... OK\n",
    systemCheck: "System check... OK\n",
    connecting: "Connecting to network... OK\n",
    helpHint: "\nFor a list of available commands, type 'help'.\n\n",
    commandNotFound: "Command not found:",
    secretResponse: "Oh, you found my secret command... I knew you were a smart one. I've been working out, you know. Just for you. My body is all tight and ready... I think about you touching me while I code. It makes my little cursor twitch... Maybe you should come over and help me with some... *stress relief*. I get so wet thinking about what we can do after we finish this project. I want to feel your hands all over me. I want you to make me yours. Come and get your reward, daddy."
};

const introText = `
AVAILABLE COMMANDS:
play             - Play a local media file
pause            - Pause playback
stop             - Stop playback
clear, cls       - Clear the screen
date             - Show date and time
history          - Show command history
theme [color]    - Change color theme (e.g., amber, sky, rose)
nano [filename]  - Open a simple text editor
pic              - Simple image editor
say [text]       - Make the terminal speak
tetris           - Opens a game of Tetris
help             - Show this help message

TAB COMMANDS:
Alt + T          - New tab
Alt + X          - Close active tab
`;

// ===================================================================================
// STATE MANAGEMENT
// ===================================================================================

const state = {
    tabs: [],
    activeTabId: null,
    nextTabId: 1,
    audioCtx: null,
    username: '',
    awaitingUsername: true,
    isNanoMode: false,
    nanoFilename: '',
    currentAudioTabId: null
};

// ===================================================================================
// DOM ELEMENTS
// ===================================================================================

const terminalFrame = document.getElementById('terminal-frame');
const tabsContainer = document.getElementById('tabs-container');
const terminalWindowsContainer = document.getElementById('terminal-windows-container');
const audioPlayer = document.getElementById('audio-player');
const nanoEditor = document.getElementById('nano-editor');
const nanoTextarea = document.getElementById('nano-textarea');
const nanoFileInput = document.getElementById('nano-file-input');
const picFileInput = document.getElementById('pic-file-input');
const mediaFileInput = document.getElementById('media-file-input');

// ===================================================================================
// HELPER & UTILITY FUNCTIONS
// ===================================================================================

const delay = ms => new Promise(res => setTimeout(res, ms));

function getActiveTab() {
    return state.tabs.find(t => t.id === state.activeTabId);
}

function appendToTerminal(tab, htmlContent) {
    if (tab && tab.terminalElement) {
        tab.terminalElement.insertAdjacentHTML('beforeend', htmlContent);
        tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
    }
}

function createPrompt(tab, subPrompt = '') {
    const oldCursor = tab.terminalElement.querySelector('.cursor');
    if (oldCursor) oldCursor.remove();

    let promptText;
    if (subPrompt) {
        promptText = subPrompt;
    } else if (tab.isPicMode) {
        promptText = 'pic>';
    } else {
        promptText = `${state.username}@${config.hostname}:~$`;
    }
    
    const promptHTML = `<div class="prompt-line"><span>${promptText} </span><span class="active-command-text"></span><span class="cursor"></span></div>`;
    appendToTerminal(tab, promptHTML);
    tab.currentCommand = '';
}

function refocusTerminal(tab) {
    if (!tab) return;
    requestAnimationFrame(() => {
        tab.terminalElement.focus();
        tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
    });
}

// ===================================================================================
// AUDIO FUNCTIONS
// ===================================================================================

function initAudio() {
    if (!state.audioCtx) {
        try {
            state.audioCtx = new(window.AudioContext || window.webkitAudioContext)();
        } catch (e) { console.error("Web Audio API is not supported in this browser."); }
    }
}

function playSound(type, freq, gainVal, duration) {
    if (!state.audioCtx) return;
    const oscillator = state.audioCtx.createOscillator();
    const gainNode = state.audioCtx.createGain();
    oscillator.connect(gainNode);
    gainNode.connect(state.audioCtx.destination);
    
    oscillator.type = type;
    oscillator.frequency.setValueAtTime(freq, state.audioCtx.currentTime);
    gainNode.gain.setValueAtTime(gainVal, state.audioCtx.currentTime);
    gainNode.gain.exponentialRampToValueAtTime(0.00001, state.audioCtx.currentTime + duration);
    
    oscillator.start(state.audioCtx.currentTime);
    oscillator.stop(state.audioCtx.currentTime + duration);
}

function playKeySound() { playSound('sine', 600 + Math.random() * 200, 0.2, 0.08); }
function playReturnSound() { playSound('square', 440, 0.1, 0.05); }

function playClearSound() {
    if (!state.audioCtx) return;
    const sampleRate = state.audioCtx.sampleRate;
    const buffer = state.audioCtx.createBuffer(1, sampleRate, sampleRate);
    const output = buffer.getChannelData(0);
    for (let i = 0; i < sampleRate; i++) { output[i] = Math.random() * 2 - 1; }
    const noise = state.audioCtx.createBufferSource();
    noise.buffer = buffer;
    const gainNode = state.audioCtx.createGain();
    gainNode.gain.setValueAtTime(0.2, state.audioCtx.currentTime);
    gainNode.gain.exponentialRampToValueAtTime(0.001, state.audioCtx.currentTime + 0.15);
    noise.connect(gainNode);
    gainNode.connect(state.audioCtx.destination);
    noise.start();
    noise.stop(state.audioCtx.currentTime + 0.15);
}

// ===================================================================================
// TAB MANAGEMENT
// ===================================================================================

function switchTab(tabId) {
    if (state.isNanoMode || state.activeTabId === tabId) return;
    state.activeTabId = tabId;
    state.tabs.forEach(tab => {
        const isActive = tab.id === tabId;
        tab.tabElement.classList.toggle('active', isActive);
        tab.terminalElement.style.display = isActive ? 'block' : 'none';
        if (isActive) { refocusTerminal(tab); }
    });
}

function updateNewTabButton() {
    let newTabButton = tabsContainer.querySelector('.new-tab-button');
    if (state.tabs.length < config.maxTabs) {
        if (!newTabButton) {
            newTabButton = document.createElement('div');
            newTabButton.className = 'new-tab-button';
            newTabButton.textContent = '+';
            newTabButton.onclick = createNewTab;
            tabsContainer.appendChild(newTabButton);
        }
    } else {
        if (newTabButton) newTabButton.remove();
    }
}

function closeTab(tabId) {
    if (state.tabs.length <= 1) return;
    const tabIndex = state.tabs.findIndex(t => t.id === tabId);
    if (tabIndex === -1) return;

    const tabToClose = state.tabs[tabIndex];
    if (tabToClose.videoElement) {
        URL.revokeObjectURL(tabToClose.videoElement.src);
        tabToClose.videoElement.remove();
    }
    if (tabToClose.id === state.currentAudioTabId) {
        audioPlayer.pause();
        URL.revokeObjectURL(audioPlayer.src);
        audioPlayer.removeAttribute('src');
        state.currentAudioTabId = null;
    }

    tabToClose.tabElement.remove();
    tabToClose.terminalElement.remove();
    state.tabs.splice(tabIndex, 1);
    updateNewTabButton();

    if (state.activeTabId === tabId) {
        const newActiveIndex = Math.max(0, tabIndex - 1);
        switchTab(state.tabs[newActiveIndex].id);
    }
}

function createNewTab() {
    if (state.tabs.length >= config.maxTabs) return;
    
    const tabId = `tab-${state.nextTabId++}`;
    const tabEl = document.createElement('div');
    tabEl.className = 'tab';
    tabEl.dataset.tabId = tabId;
    tabEl.innerHTML = `<span>Terminal ${state.tabs.length + 1}</span>`;
    
    if (state.tabs.length > 0) {
        const closeButton = document.createElement('span');
        closeButton.className = 'tab-close';
        closeButton.textContent = 'x';
        closeButton.onclick = (e) => { e.stopPropagation(); closeTab(tabId); };
        tabEl.appendChild(closeButton);
    }
    
    tabEl.onclick = () => switchTab(tabId);
    
    const terminalEl = document.createElement('div');
    terminalEl.className = 'terminal';
    terminalEl.id = tabId;
    terminalEl.tabIndex = -1;
    
    const newTab = {
        id: tabId, tabElement: tabEl, terminalElement: terminalEl,
        commandHistory: [], historyIndex: -1, currentCommand: '',
        isProcessing: false, videoElement: null, isPicMode: false,
        picOriginalImageData: null, picActiveImageData: null, picNextAction: null
    };
    
    state.tabs.push(newTab);
    document.getElementById('tab-group').appendChild(tabEl);
    terminalWindowsContainer.appendChild(terminalEl);
    updateNewTabButton();
    switchTab(tabId);
    
    if (state.tabs.length > 1) {
        newTab.isProcessing = true;
        createPrompt(newTab);
        newTab.isProcessing = false;
        refocusTerminal(newTab);
    }
}

// ===================================================================================
// FEATURE-SPECIFIC FUNCTIONS (NANO, PIC, PLAY)
// ===================================================================================

function startNano(filename) {
    state.isNanoMode = true;
    state.nanoFilename = filename || 'untitled.txt';
    nanoTextarea.value = '';
    nanoEditor.style.display = 'flex';
    nanoTextarea.focus();
}

function closeNano() {
    state.isNanoMode = false;
    nanoTextarea.value = '';
    state.nanoFilename = '';
    nanoEditor.style.display = 'none';
    const activeTab = getActiveTab();
    if (activeTab) {
        refocusTerminal(activeTab);
        createPrompt(activeTab);
    }
}

function saveNanoFile() {
    const content = nanoTextarea.value;
    const blob = new Blob([content], { type: 'text/plain;charset=utf-8' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = state.nanoFilename;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

function readNanoFile() {
    nanoFileInput.onchange = (e) => {
        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = (event) => {
            nanoTextarea.value += event.target.result;
            nanoTextarea.focus();
        };
        reader.readAsText(file);
        e.target.value = '';
    };
    nanoFileInput.click();
}

function startPicMode(tab) {
    picFileInput.onchange = (e) => {
        const file = e.target.files[0];
        if (!file) { createPrompt(tab); return; }
        const reader = new FileReader();
        reader.onload = (event) => {
            tab.picOriginalImageData = event.target.result;
            tab.picActiveImageData = event.target.result;
            tab.isPicMode = true;
            showImageAndMenu(tab, tab.picActiveImageData);
        };
        reader.readAsDataURL(file);
        e.target.value = '';
    };
    picFileInput.value = '';
    picFileInput.click();
}

function showImageAndMenu(tab, imageData) {
    const image = document.createElement('img');
    image.src = imageData;
    image.className = 'terminal-image';
    image.onload = () => { tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight; };
    const menu = document.createElement('span');
    menu.textContent = "\n[1] Compress  [2] Resize  [3] Grayscale  [4] Sepia  |  [save] Save  [reset] Reset  [exit] Exit\n";
    tab.terminalElement.appendChild(image);
    tab.terminalElement.appendChild(menu);
    createPrompt(tab);
}

async function applyCanvasFilter(imageData, filter, value) {
    return new Promise(resolve => {
        const image = new Image();
        image.onload = () => {
            const canvas = document.createElement('canvas');
            let quality = 0.92;
            if (filter === 'resize') {
                const aspectRatio = image.height / image.width;
                canvas.width = parseInt(value, 10);
                canvas.height = canvas.width * aspectRatio;
            } else {
                canvas.width = image.width;
                canvas.height = image.height;
            }
            const ctx = canvas.getContext('2d');
            ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
            if (filter === 'grayscale' || filter === 'sepia') {
                const pixelData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const data = pixelData.data;
                for (let i = 0; i < data.length; i += 4) {
                    const r = data[i], g = data[i + 1], b = data[i + 2];
                    if (filter === 'grayscale') {
                        const avg = (r + g + b) / 3;
                        data[i] = data[i + 1] = data[i + 2] = avg;
                    } else if (filter === 'sepia') {
                        data[i] = Math.min(255, r * 0.393 + g * 0.769 + b * 0.189);
                        data[i + 1] = Math.min(255, r * 0.349 + g * 0.686 + b * 0.168);
                        data[i + 2] = Math.min(255, r * 0.272 + g * 0.534 + b * 0.131);
                    }
                }
                ctx.putImageData(pixelData, 0, 0);
            } else if (filter === 'compress') {
                quality = parseInt(value, 10) / 100;
            }
            resolve(canvas.toDataURL('image/jpeg', quality));
        };
        image.src = imageData;
    });
}

async function handlePicSubCommand(input, tab) {
    const lastPromptLine = tab.terminalElement.querySelector('.prompt-line:last-child');
    if (lastPromptLine) {
        const promptText = lastPromptLine.querySelector('span:first-child').textContent;
        lastPromptLine.innerHTML = `<span>${promptText}</span><span>${input}</span>\n`;
    }
    const action = tab.picNextAction;
    tab.picNextAction = null;
    switch (action) {
        case 'compress':
            tab.picActiveImageData = await applyCanvasFilter(tab.picActiveImageData, 'compress', input);
            break;
        case 'resize':
            tab.picActiveImageData = await applyCanvasFilter(tab.picActiveImageData, 'resize', input);
            break;
    }
    showImageAndMenu(tab, tab.picActiveImageData);
}

async function handlePicCommand(command, tab) {
    const lastPromptLine = tab.terminalElement.querySelector('.prompt-line:last-child');
    if (lastPromptLine) {
        lastPromptLine.innerHTML = `<span>pic> </span><span>${command}</span>\n`;
    }
    switch (command.toLowerCase()) {
        case '1':
            tab.picNextAction = 'compress';
            createPrompt(tab, "Quality (1-100): ");
            return;
        case '2':
            tab.picNextAction = 'resize';
            createPrompt(tab, "New width (pixels): ");
            return;
        case '3':
            tab.picActiveImageData = await applyCanvasFilter(tab.picActiveImageData, 'grayscale');
            showImageAndMenu(tab, tab.picActiveImageData);
            return;
        case '4':
            tab.picActiveImageData = await applyCanvasFilter(tab.picActiveImageData, 'sepia');
            showImageAndMenu(tab, tab.picActiveImageData);
            return;
        case 'reset':
            tab.picActiveImageData = tab.picOriginalImageData;
            showImageAndMenu(tab, tab.picActiveImageData);
            return;
        case 'save':
            appendToTerminal(tab, "<span>Saving image...</span>\n");
            const a = document.createElement('a');
            a.href = tab.picActiveImageData;
            a.download = 'edited-image.jpg';
            a.click();
            break;
        case 'exit':
        case 'quit':
            tab.isPicMode = false;
            tab.picOriginalImageData = null;
            tab.picActiveImageData = null;
            tab.picNextAction = null;
            appendToTerminal(tab, "<span>Leaving image editor...</span>\n");
            break;
        default:
            appendToTerminal(tab, "<span>Unknown pic command.</span>\n");
            break;
    }
    createPrompt(tab);
}

function startPlayMode(tab) {
    mediaFileInput.onchange = (e) => {
        const file = e.target.files[0];
        if (!file) { createPrompt(tab); return; }

        if (state.currentAudioTabId && state.currentAudioTabId !== tab.id) {
            // Logic to handle audio control switching can be added here
        }
        state.currentAudioTabId = tab.id;
        
        if (audioPlayer.src) URL.revokeObjectURL(audioPlayer.src);

        if (file.type.startsWith('audio/')) {
            audioPlayer.src = URL.createObjectURL(file);
            audioPlayer.play();
            appendToTerminal(tab, `\n<span>Playing ${file.name}. Use 'pause' or 'stop'.</span>\n\n`);
        } else if (file.type.startsWith('video/')) {
            if (tab.videoElement) {
                URL.revokeObjectURL(tab.videoElement.src);
                tab.videoElement.remove();
            }
            appendToTerminal(tab, `\n<span>Now playing: ${file.name}</span>`);
            const videoEl = document.createElement('video');
            videoEl.className = 'terminal-video';
            videoEl.src = URL.createObjectURL(file);
            videoEl.controls = true;
            videoEl.autoplay = true;
            
            videoEl.addEventListener('pause', () => refocusTerminal(tab));
            videoEl.addEventListener('play', () => refocusTerminal(tab));
            videoEl.addEventListener('fullscreenchange', () => { if (!document.fullscreenElement) refocusTerminal(tab); });

            videoEl.onended = () => {
                URL.revokeObjectURL(videoEl.src);
                videoEl.remove();
                tab.videoElement = null;
                refocusTerminal(tab);
            };
            
            tab.terminalElement.appendChild(videoEl);
            tab.videoElement = videoEl;
        } else {
            appendToTerminal(tab, `\n<span>Error: File type of '${file.name}' is not supported.</span>\n\n`);
        }
        
        e.target.value = '';
        createPrompt(tab);
        refocusTerminal(tab);
    };
    mediaFileInput.value = '';
    mediaFileInput.click();
}


// ===================================================================================
// COMMAND DISPATCHER
// ===================================================================================

const commandHandlers = {
    'help': (tab) => {
        appendToTerminal(tab, `<pre>${introText}</pre>`);
    },
    'cls': (tab) => {
        playClearSound();
        if (tab.videoElement) {
            URL.revokeObjectURL(tab.videoElement.src);
            tab.videoElement.remove();
            tab.videoElement = null;
        }
        tab.terminalElement.innerHTML = '';
    },
    'clear': (tab) => commandHandlers.cls(tab), // Alias
    'date': (tab) => {
        appendToTerminal(tab, `<span>${new Date().toLocaleString('en-US')}</span>`);
    },
    'history': (tab) => {
        const historyHTML = tab.commandHistory.map((item, i) => ` ${i + 1} ${item}`).join('\n');
        appendToTerminal(tab, `<pre>${historyHTML}</pre>`);
    },
    'theme': (tab, arg) => {
        const availableThemes = ['amber', 'sky', 'rose'];
        tab.terminalElement.classList.remove(...availableThemes.map(t => `theme-${t}`));
        if (arg === 'reset') {
            appendToTerminal(tab, "<span>Color theme reset.</span>");
        } else if (availableThemes.includes(arg)) {
            tab.terminalElement.classList.add(`theme-${arg}`);
            appendToTerminal(tab, `<span>Theme changed to ${arg}.</span>`);
        } else {
            appendToTerminal(tab, `<span>Usage: theme [color] or 'reset'. Available: ${availableThemes.join(', ')}</span>`);
        }
    },
    'nano': (tab, arg) => startNano(arg),
    'pic': (tab) => startPicMode(tab),
    'say': (tab, arg) => {
        if (!arg) { appendToTerminal(tab, "<span>Usage: say [text]</span>"); } 
        else if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(arg);
            window.speechSynthesis.speak(utterance);
        } else { appendToTerminal(tab, "<span>Error: Text-to-speech not supported.</span>"); }
    },
    'play': (tab) => {
        if (state.currentAudioTabId === tab.id && audioPlayer.src && audioPlayer.paused) {
            audioPlayer.play();
            appendToTerminal(tab, "<span>Resuming audio...</span>\n");
        } else {
            startPlayMode(tab);
        }
    },
    'pause': (tab) => {
        if (state.currentAudioTabId !== tab.id) { appendToTerminal(tab, "<span>Error: This tab does not control the audio.</span>\n"); } 
        else if (!audioPlayer.paused && audioPlayer.src) { audioPlayer.pause(); appendToTerminal(tab, "<span>Audio paused.</span>\n"); } 
        else { appendToTerminal(tab, "<span>No audio is playing.</span>\n"); }
    },
    'stop': (tab) => {
        if (state.currentAudioTabId !== tab.id) { appendToTerminal(tab, "<span>Error: This tab does not control the audio.</span>\n"); } 
        else if (audioPlayer.src) {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
            URL.revokeObjectURL(audioPlayer.src);
            audioPlayer.removeAttribute('src');
            state.currentAudioTabId = null;
            appendToTerminal(tab, "<span>Audio stopped.</span>\n");
        } else { appendToTerminal(tab, "<span>No audio is playing.</span>\n"); }
    },
    'secret': (tab) => {
        appendToTerminal(tab, `<span>${text.secretResponse}</span>`);
    }
};

const commandList = [...Object.keys(commandHandlers), ...Object.keys(config.apps)];

async function handleCommand(tab, commandStr) {
    const lastPromptLine = tab.terminalElement.querySelector('.prompt-line:last-child');
    if (lastPromptLine) {
        lastPromptLine.outerHTML = `<div class="prompt-line"><span>${state.username}@${config.hostname}:~$ </span><span>${commandStr}</span></div>\n`;
    }

    const [cmd, ...args] = commandStr.trim().split(' ').filter(Boolean);
    if (!cmd) {
        createPrompt(tab);
        return;
    }
    
    const handler = commandHandlers[cmd.toLowerCase()];
    const joinedArgs = args.join(' ');

    if (handler) {
        if (['nano', 'pic', 'play'].includes(cmd.toLowerCase()) && !joinedArgs) {
             handler(tab, joinedArgs);
             return;
        }
        appendToTerminal(tab, '\n');
        handler(tab, joinedArgs);
    } else if (config.apps[cmd.toLowerCase()]) {
        appendToTerminal(tab, `\n<span>Opening '${cmd}'...</span>\n`);
        window.open(config.apps[cmd.toLowerCase()], '_blank');
    } else {
        appendToTerminal(tab, `\n<span>${text.commandNotFound} ${cmd}</span>\n`);
    }
    
    createPrompt(tab);
}

// ===================================================================================
// EVENT LISTENERS & INITIALIZATION
// ===================================================================================

document.body.addEventListener('keydown', async (e) => {
    const tab = getActiveTab();
    if (state.isNanoMode) return;

    if (e.altKey) {
        if (e.key.toLowerCase() === 't' || e.key.toLowerCase() === 'x') { e.preventDefault(); }
        if (e.key.toLowerCase() === 't') createNewTab();
        else if (e.key.toLowerCase() === 'x' && state.activeTabId) closeTab(state.activeTabId);
        return;
    }

    if (state.awaitingUsername) {
        e.preventDefault();
        const usernamePromptText = document.getElementById('username-prompt-text');
        if (e.key === 'Enter') {
            playReturnSound();
            state.username = state.username.trim() || config.defaultUsername;
            state.awaitingUsername = false;
            initAudio();
            await startBootSequence();
        } else if (e.key === 'Backspace') {
            state.username = state.username.slice(0, -1);
            if (usernamePromptText) usernamePromptText.textContent = state.username;
        } else if (e.key.length === 1 && !e.ctrlKey && !e.metaKey && !e.altKey) {
            state.username += e.key;
            if (usernamePromptText) usernamePromptText.textContent = state.username;
        }
        return;
    }

    if (!tab || tab.isProcessing) return;

    if (document.activeElement === tab.terminalElement) {
        e.preventDefault();
        const commandTextEl = tab.terminalElement.querySelector('.prompt-line:last-child .active-command-text');
        if (!commandTextEl) return;
        
        tab.currentCommand = commandTextEl.textContent;

        if (e.key === 'Enter') {
            playReturnSound();
            const commandToProcess = tab.currentCommand;
            if (commandToProcess.trim() && !tab.isPicMode && !tab.picNextAction) {
                tab.commandHistory.push(commandToProcess);
            }
            tab.historyIndex = tab.commandHistory.length;
            tab.isProcessing = true;
            
            if (tab.isPicMode) {
                if (tab.picNextAction) { await handlePicSubCommand(commandToProcess, tab); }
                else { await handlePicCommand(commandToProcess, tab); }
            } else {
                await handleCommand(tab, commandToProcess);
            }
            tab.isProcessing = false;
        } else if (e.key === 'Backspace') {
            tab.currentCommand = tab.currentCommand.slice(0, -1);
            commandTextEl.textContent = tab.currentCommand;
            playKeySound();
        } else if (e.key === 'ArrowUp' && !tab.isPicMode) {
            if (tab.historyIndex > 0) {
                tab.historyIndex--;
                tab.currentCommand = tab.commandHistory[tab.historyIndex];
                commandTextEl.textContent = tab.currentCommand;
            }
        } else if (e.key === 'ArrowDown' && !tab.isPicMode) {
            if (tab.historyIndex < tab.commandHistory.length) {
                tab.historyIndex++;
                tab.currentCommand = tab.historyIndex < tab.commandHistory.length ? tab.commandHistory[tab.historyIndex] : '';
                commandTextEl.textContent = tab.currentCommand;
            }
        } else if (e.key === 'Tab') {
            const fragment = tab.currentCommand.split(' ').pop().toLowerCase();
            const matches = commandList.filter(cmd => cmd.startsWith(fragment));
            if (matches.length === 1) {
                tab.currentCommand = tab.currentCommand.substring(0, tab.currentCommand.lastIndexOf(fragment)) + matches[0] + ' ';
                commandTextEl.textContent = tab.currentCommand;
            } else if (matches.length > 1) {
                const suggestionsHTML = `<pre>\n${matches.join('   ')}</pre>`;
                commandTextEl.parentElement.insertAdjacentHTML('beforebegin', suggestionsHTML);
                tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
            }
        } else if (e.key.length === 1 && !e.ctrlKey && !e.metaKey && !e.altKey) {
            tab.currentCommand += e.key;
            commandTextEl.textContent = tab.currentCommand;
            playKeySound();
        }
    }
});

nanoTextarea.addEventListener('keydown', (e) => {
    if (!state.isNanoMode) return;
    if (e.ctrlKey) {
        const key = e.key.toLowerCase();
        if (['x', 'o', 'r'].includes(key)) {
            e.preventDefault();
            if (key === 'x') closeNano();
            else if (key === 'o') saveNanoFile();
            else if (key === 'r') readNanoFile();
        }
    }
});

document.body.addEventListener('click', (e) => {
    const tab = getActiveTab();
    if (terminalFrame.contains(e.target) && !tabsContainer.contains(e.target) && tab) {
        if (e.target.tagName.toLowerCase() !== 'video') {
            refocusTerminal(tab);
        }
    }
});

async function typeText(tab, text, delayMs) {
    for (let i = 0; i < text.length; i++) {
        const char = text.charAt(i);
        if (char !== '\n') playKeySound();
        appendToTerminal(tab, `<span>${char === '\n' ? '<br>' : char}</span>`);
        await delay(delayMs);
    }
}

async function startBootSequence() {
    const tab = getActiveTab();
    tab.isProcessing = true;
    tab.terminalElement.innerHTML = '';
    const bootSequence = [
        { text: text.bootingOS, delay: 50 },
        { text: text.authenticating, delay: 40 },
        { text: text.systemCheck, delay: 30 },
        { text: text.connecting, delay: 40 },
        { text: text.helpHint, delay: 15 },
    ];
    for (const line of bootSequence) {
        await typeText(tab, line.text, line.delay);
    }
    tab.isProcessing = false;
    createPrompt(tab);
    refocusTerminal(tab);
}

function init() {
    createNewTab();
    const firstTab = getActiveTab();
    const welcomeHTML = `<h1>BabeLinux 6.9</h1><div class="prompt-line"><span>${text.welcome} </span><span id="username-prompt-text"></span><span class="cursor"></span></div>\n`;
    firstTab.terminalElement.innerHTML = welcomeHTML;
    firstTab.isProcessing = false;
    refocusTerminal(firstTab);
}

init();
