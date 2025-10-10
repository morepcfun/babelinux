<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/stats/visitors.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BabeLinux Sexy Terminal OS</title>
<meta name="description" content="Dive into a vibrant monochrome Linux Terminal OS right in your browser, packed with a treasure trove of free games and tools.">
<meta name="author" content="Johnny Heggelund">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://aigirl.blog/">
<link rel="icon" href="data:image/png;base64,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">
<style>
:root {
--terminal-color: #33FF33;
}
html,
body {
margin: 0;
padding: 0;
background-color: #000;
color: var(--terminal-color);
font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
font-size: 16px;
overflow: hidden;
width: 100%;
height: 100%;
}
body {
display: flex;
align-items: center;
justify-content: center;
width: 100vw;
height: 100vh;
}
#terminal-frame {
width: 100%;
height: 99.8%;
box-sizing: border-box;
border: 1px solid var(--terminal-color);
display: flex;
flex-direction: column;
}
#tabs-container {
display: flex;
background-color: #0a0a0a;
border-bottom: 1px solid var(--terminal-color);
flex-shrink: 0;
}
.tab {
padding: 8px 15px;
cursor: pointer;
border-right: 1px solid var(--terminal-color);
position: relative;
display: flex;
align-items: center;
gap: 8px;
}
.tab:hover {
background-color: #1a1a1a;
}
.tab.active {
background-color: #111;
color: #55FF55;
font-weight: bold;
}
.tab-close {
font-weight: normal;
padding: 0 4px;
border-radius: 3px;
}
.tab-close:hover {
background-color: #FF3333;
color: #000;
}
.new-tab-button {
padding: 8px 15px;
cursor: pointer;
font-weight: bold;
}
#tabs-container .tab:last-of-type {
margin-right: auto;
}
.new-tab-button:hover {
background-color: var(--terminal-color);
color: #000;
}
#terminal-windows-container {
flex-grow: 1;
position: relative;
overflow: hidden;
}
.terminal {
padding: 15px;
white-space: pre-wrap;
word-wrap: break-word;
height: 100%;
width: 100%;
box-sizing: border-box;
overflow-y: auto;
cursor: text;
outline: none;
position: absolute;
top: 0;
left: 0;
}
.terminal-image {
max-width: 95%;
margin-top: 10px;
margin-bottom: 10px;
border: 2px solid var(--terminal-color);
}
.prompt-line {
display: flex;
white-space: pre;
}
.cursor {
background-color: var(--terminal-color);
display: inline-block;
width: 9.6px;
height: 19px;
animation: blink 1s step-end infinite;
margin-left: 1px;
}
@keyframes blink {
50% {
background-color: transparent;
}
}
.ls-folder {
color: #00aaff;
font-weight: bold;
}
.terminal-video {
max-width: 80%;
max-height: 70%;
display: block;
margin: 15px 0;
border: 2px solid var(--terminal-color);
outline: none;
}
#tab-group {
display: flex;
flex-grow: 1;
}
#nano-editor {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
z-index: 100;
flex-direction: column;
font-family: 'Menlo', 'Monaco', 'Courier New', monospace;
}
#nano-textarea {
flex-grow: 1;
background-color: #000;
color: var(--terminal-color);
border: none;
outline: none;
padding: 10px;
font-size: 16px;
resize: none;
}
#nano-footer {
flex-shrink: 0;
padding: 2px 5px;
text-align: center;
background-color: #0a0a0a;
}
.nano-command {
background-color: #0a0a0a;
color: var(--terminal-color);
padding: 2px 5px;
margin: 0 10px;
display: inline-block;
}
</style>
</head>
<body>
<div id="terminal-frame">
<div id="tabs-container">
<div id="tab-group"></div>
</div>
<div id="terminal-windows-container"></div>
</div>
<div id="nano-editor">
<textarea id="nano-textarea"></textarea>
<div id="nano-footer">
<span class="nano-command">^R Read File</span>
<span class="nano-command">^O Save</span>
<span class="nano-command">^X Exit</span>
</div>
</div>
<input type="file" id="nano-file-input" style="display: none;" accept=".txt, text/plain">
<input type="file" id="pic-file-input" style="display: none;" accept="image/*">
<audio id="audio-player"></audio>
<script>
const config = {
maxTabs: 5,
hostname: 'aigirl.blog',
defaultUsername: 'guest',
defaultColor: '#33FF33',
asciiWidth: 80
};

const text = {
welcome: "Hey, cutie! What's your name?",
bootingOS: "Starting BabeLinux...",
authenticating: "Authenticating user... OK\n",
systemCheck: "System check... OK\n",
connecting: "Connecting to network... OK\n",
helpHint: "\nFor a list of available commands, type 'help'.\n\n",
helpTitle: "AVAILABLE COMMANDS:",
lsDescription: "List files and folders",
cdDescription: "Change directory",
runDescription: "Run an app in a new tab",
playDescription: "Play a media file",
infoDescription: "Show file description",
clearDescription: "Clear the screen",
editDescription: "Open code editor",
dateDescription: "Show date and time",
whoamiDescription: "Show your username",
historyDescription: "Show command history",
echoDescription: "Repeat a string of text",
calcDescription: "Simple calculator",
notesDescription: "Notepad for the session",
themeDescription: "Change the color theme",
nanoDescription: "Open a simple text editor",
picDescription: "Simple image editor",
helpDescription: "Show this help message",
tabTitle: "TAB COMMANDS:",
newTabDescription: "New tab",
closeTabDescription: "Close active tab",
picMenu: "\n[1] Compress  [2] Resize  [3] Grayscale  [4] Sepia  |  [save] Save  [reset] Reset  [exit] Exit\n",
picPromptQuality: "Quality (1-100): ",
picPromptWidth: "New width (pixels): ",
cdError: "cd: No such file or directory:",
openingCodeEditor: "Opening code editor...\n",
codeEditorError: "Error: Code editor 'coder' not found in the file system.\n",
runUsage: "Usage: run [appname]\n",
openingApp: "Opening",
appNotFound: "Error: The app",
wasNotFound: "was not found.\n",
nowPlaying: "Now playing:",
playingSound: "Playing",
usePauseStop: "Use 'pause' or 'stop'.\n",
filetypeNotSupported: "Error: The file type of",
isNotSupported: "is not supported.\n",
mediaFileNotFound: "Error: The media file",
resumingSound: "Resuming audio...\n",
soundPaused: "Audio paused. Use 'play' to resume.\n",
soundStopped: "Audio stopped.\n",
noDescription: "No description found for",
infoError: "Error: Could not read info for",
corsError: "(This may be due to CORS policy).\n",
infoUsage: "Usage: info [filename]\n",
calculatorError: "Invalid expression. Only numbers and operators (+, -, *, /, (, )) are allowed.\n",
noteAdded: "Note added.\n",
noNotes: "No notes.\n",
notesCleared: "All notes have been cleared.\n",
notesUsage: "Usage: notes [add|list|clear]\n",
colorChanged: "The color has been changed.\n",
colorReset: "The color has been reset.\n",
commandNotFound: "Command not found:",
picCommandNotFound: "Unknown pic command. Try a number from the menu, 'save', 'reset', or 'exit'.\n",
picSaving: "Saving image...\n",
leavingPicMode: "Leaving image editor...\n",
secretResponse: "Oh, you found my secret command... To enter the secret room inside the bar in Leisure Suit Larry, tell the guard the password: Ken sent me."
};

const commandList = [
'pic', 'ls', 'dir', 'cd', 'edit', 'run', 'play', 'pause', 'stop', 'info',
'help', 'cls', 'clear', 'date', 'whoami', 'history', 'echo', 'calc',
'notes', 'theme', 'nano', 'secret'
];

const commandsWithSpacing = [
'ls', 'dir', 'help', 'history', 'whoami', 'date', 'echo', 'calc', 'notes', 'info'
];

const terminalFrame = document.getElementById('terminal-frame');
const tabsContainer = document.getElementById('tabs-container');
const terminalWindowsContainer = document.getElementById('terminal-windows-container');
const audioPlayer = document.getElementById('audio-player');
const nanoEditor = document.getElementById('nano-editor');
const nanoTextarea = document.getElementById('nano-textarea');
const nanoFileInput = document.getElementById('nano-file-input');
const picFileInput = document.getElementById('pic-file-input');

let tabs = [];
let activeTabId = null;
let nextTabId = 1;
let audioCtx;
let username = '';
let awaitingUsername = true;

let isNanoMode = false;
let nanoOwningTabId = null;
let audioOwningTabId = null;

const delay = ms => new Promise(res => setTimeout(res, ms));

const introText = `
${text.helpTitle}

ls, dir         - ${text.lsDescription}
cd [folder]     - ${text.cdDescription}
run [app]       - ${text.runDescription}
info [file]     - ${text.infoDescription}
clear, cls      - ${text.clearDescription}
date            - ${text.dateDescription}
whoami          - ${text.whoamiDescription}
history         - ${text.historyDescription}
echo [text]     - ${text.echoDescription}
calc [...]      - ${text.calcDescription}
notes [...]     - ${text.notesDescription}
theme [color]   - ${text.themeDescription}
nano [filename] - ${text.nanoDescription}
pic             - ${text.picDescription}
help            - ${text.helpDescription}

${text.tabTitle}

Alt + T         - ${text.newTabDescription}
Alt + X         - ${text.closeTabDescription}
`;

const bootSequence = [{
text: text.bootingOS,
delay: 50
}, {
text: text.authenticating,
delay: 40
}, {
text: text.systemCheck,
delay: 30
}, {
text: text.connecting,
delay: 40
}, {
text: text.helpHint,
delay: 15
}, ];

const fileSystem = {
'type': 'folder',
'content': {
'games': {
'type': 'folder',
'content': {
'100laps': { type: 'file', url: 'https://morepcfun.github.io/100laps/' },
'adventure': { type: 'file', url: 'https://morepcfun.github.io/adventure/' },
'ameliax': { type: 'file', url: 'https://morepcfun.github.io/ameliax/' },
'billiards': { type: 'file', url: 'https://morepcfun.github.io/billiards/' },
'blackjack': { type: 'file', url: 'https://morepcfun.github.io/blackjack/' },
'championship': { type: 'file', url: 'https://morepcfun.github.io/championship/' },
'citybuilder': { type: 'file', url: 'https://morepcfun.github.io/citybuilder/' },
'ludo': { type: 'file', url: 'https://morepcfun.github.io/ludo/' },
'minigolf': { type: 'file', url: 'https://morepcfun.github.io/minigolf/' },
'shithead': { type: 'file', url: 'https://morepcfun.github.io/shithead/' },
'snake': { type: 'file', url: 'https://morepcfun.github.io/snake/' },
'tetris': { type: 'file', url: 'https://morepcfun.github.io/tetris/' },
'uno': { type: 'file', url: 'https://morepcfun.github.io/uno/' },
'yatzy': { type: 'file', url: 'https://morepcfun.github.io/yatzy/' },
}
},
'tools': {
'type': 'folder',
'content': {
'base64': { type: 'file', url: 'https://morepcfun.github.io/base64/' },
'coder': { type: 'file', url: 'https://morepcfun.github.io/coder/', alias: 'edit' },
'emojifinder': { type: 'file', url: 'https://morepcfun.github.io/emoji/' },
'image2ascii': { type: 'file', url: 'https://morepcfun.github.io/image2ascii/' },
'imagecomp': { type: 'file', url: 'https://morepcfun.github.io/imagecomp/' },
'imaged': { type: 'file', url: 'https://morepcfun.github.io/imaged/' },
'notepad': { type: 'file', url: 'https://morepcfun.github.io/notepad/' },
'sprited': { type: 'file', url: 'https://morepcfun.github.io/sprited/' },
'videoplayer': { type: 'file', url: 'https://morepcfun.github.io/videoplayer/' },
}
},
}
};

function appendToTerminal(tab, content, isHtml = false) {
if (isHtml) {
tab.terminalElement.insertAdjacentHTML('beforeend', content);
} else {
const textNode = document.createTextNode(content);
tab.terminalElement.appendChild(textNode);
}
tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
}

function initAudio() {
if (!audioCtx) {
try {
audioCtx = new(window.AudioContext || window.webkitAudioContext)();
} catch (e) {
console.error("Web Audio API is not supported in this browser.");
}
}
}

function playKeySound() {
if (!audioCtx) return;
const oscillator = audioCtx.createOscillator();
const gainNode = audioCtx.createGain();
oscillator.connect(gainNode);
gainNode.connect(audioCtx.destination);
oscillator.type = 'sine';
oscillator.frequency.setValueAtTime(600 + Math.random() * 200, audioCtx.currentTime);
gainNode.gain.setValueAtTime(0.2, audioCtx.currentTime);
gainNode.gain.exponentialRampToValueAtTime(0.00001, audioCtx.currentTime + 0.08);
oscillator.start(audioCtx.currentTime);
oscillator.stop(audioCtx.currentTime + 0.08);
}

function playReturnSound() {
if (!audioCtx) return;
const oscillator = audioCtx.createOscillator();
const gainNode = audioCtx.createGain();
oscillator.connect(gainNode);
gainNode.connect(audioCtx.destination);
oscillator.type = 'square';
oscillator.frequency.setValueAtTime(440, audioCtx.currentTime);
gainNode.gain.setValueAtTime(0.1, audioCtx.currentTime);
gainNode.gain.exponentialRampToValueAtTime(0.00001, audioCtx.currentTime + 0.05);
oscillator.start(audioCtx.currentTime);
oscillator.stop(audioCtx.currentTime + 0.05);
}

function playClearSound() {
if (!audioCtx) return;
const sampleRate = audioCtx.sampleRate;
const buffer = audioCtx.createBuffer(1, sampleRate, sampleRate);
const output = buffer.getChannelData(0);
for (let i = 0; i < sampleRate; i++) {
output[i] = Math.random() * 2 - 1;
}
const noise = audioCtx.createBufferSource();
noise.buffer = buffer;
const gainNode = audioCtx.createGain();
gainNode.gain.setValueAtTime(0.2, audioCtx.currentTime);
gainNode.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 0.15);
noise.connect(gainNode);
gainNode.connect(audioCtx.destination);
noise.start();
noise.stop(audioCtx.currentTime + 0.15);
}

function getNodeFromPath(path) {
let currentNode = fileSystem;
for (const part of path) {
if (currentNode.type === 'folder' && currentNode.content[part]) {
currentNode = currentNode.content[part];
} else {
return null;
}
}
return currentNode;
}

function findFileOrAlias(name, path) {
const currentNode = getNodeFromPath(path);
if (!currentNode || currentNode.type !== 'folder') return null;
if (currentNode.content[name]) {
return currentNode.content[name];
}
for (const key in currentNode.content) {
const item = currentNode.content[key];
if (item.type === 'file' && item.alias === name) {
return item;
}
}
return null;
}

function showFiles(tab) {
const currentNode = getNodeFromPath(tab.currentPath);
if (!currentNode || currentNode.type !== 'folder') return;

const items = Object.keys(currentNode.content).sort((a, b) => a.localeCompare(b));
if (items.length === 0) return;

const displayItems = items.map(name => {
const item = currentNode.content[name];
return {
name: name,
type: item.type,
displayText: item.type === 'folder' ? `[${name}]` : name
};
});

const terminalWidth = config.asciiWidth;
const minSpacing = 4;

const maxLength = displayItems.reduce((max, item) => Math.max(max, item.displayText.length), 0);
const colWidth = maxLength + minSpacing;

let numColumns = Math.floor(terminalWidth / colWidth);
if (numColumns < 1) numColumns = 1;

const numRows = Math.ceil(displayItems.length / numColumns);
const listContainer = document.createElement('div');

for (let r = 0; r < numRows; r++) {
const rowDiv = document.createElement('div');
rowDiv.style.display = 'flex';
rowDiv.style.flexDirection = 'row';

for (let c = 0; c < numColumns; c++) {
const index = c * numRows + r;
const cellSpan = document.createElement('span');
cellSpan.style.width = `${colWidth}ch`;
cellSpan.style.overflow = 'hidden';
cellSpan.style.textOverflow = 'ellipsis';
cellSpan.style.whiteSpace = 'pre';

if (index < displayItems.length) {
const item = displayItems[index];
if (item.type === 'folder') {
cellSpan.className = 'ls-folder';
}
cellSpan.textContent = item.displayText;
} else {
cellSpan.innerHTML = '&nbsp;';
}
rowDiv.appendChild(cellSpan);
}
listContainer.appendChild(rowDiv);
}
tab.terminalElement.appendChild(listContainer);
}


function createNewTab() {
if (tabs.length >= config.maxTabs) return;
const tabId = `tab-${nextTabId++}`;
const tabEl = document.createElement('div');
tabEl.className = 'tab';
tabEl.dataset.tabId = tabId;
tabEl.innerHTML = `<span>Terminal ${tabs.length + 1}</span>`;

if (tabs.length > 0) {
const closeButton = document.createElement('span');
closeButton.className = 'tab-close';
closeButton.textContent = 'x';
closeButton.onclick = (e) => {
e.stopPropagation();
closeTab(tabId);
};
tabEl.appendChild(closeButton);
}

tabEl.onclick = () => switchTab(tabId);
const terminalEl = document.createElement('div');
terminalEl.className = 'terminal';
terminalEl.id = tabId;
terminalEl.tabIndex = -1;

const newTab = {
id: tabId,
tabElement: tabEl,
terminalElement: terminalEl,
commandHistory: [],
historyIndex: -1,
currentCommand: '',
isProcessing: false,
currentPath: [],
videoElement: null,
notes: [],
isPicMode: false,
picOriginalImageData: null,
picActiveImageData: null,
picNextAction: null
};

tabs.push(newTab);
document.getElementById('tab-group').appendChild(tabEl);
terminalWindowsContainer.appendChild(terminalEl);
updateNewTabButton();
switchTab(tabId);
if (tabs.length > 1) {
newTab.isProcessing = true;
createPrompt(newTab);
newTab.isProcessing = false;
terminalEl.focus();
}
}

function closeTab(tabId) {
if (tabs.length <= 1) return;
const tabIndex = tabs.findIndex(t => t.id === tabId);
if (tabIndex === -1) return;
const wasActive = activeTabId === tabId;
const tabToClose = tabs[tabIndex];
tabToClose.tabElement.remove();
tabToClose.terminalElement.remove();

if (audioOwningTabId === tabId) {
audioPlayer.pause();
audioOwningTabId = null;
}
if (nanoOwningTabId === tabId && isNanoMode) {
closeNano(true);
}

tabs.splice(tabIndex, 1);
updateNewTabButton();
if (wasActive) {
const newActiveIndex = Math.max(0, tabIndex - 1);
switchTab(tabs[newActiveIndex].id);
}
}

function switchTab(tabId) {
if (activeTabId === tabId) return;
activeTabId = tabId;
tabs.forEach(tab => {
const isActive = tab.id === tabId;
tab.tabElement.classList.toggle('active', isActive);
tab.terminalElement.style.display = isActive ? 'block' : 'none';
if (isActive) {
tab.terminalElement.focus();
tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
}
});
}

function getActiveTab() {
return tabs.find(t => t.id === activeTabId);
}

function updateNewTabButton() {
let newTabButton = tabsContainer.querySelector('.new-tab-button');
if (tabs.length < config.maxTabs) {
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

async function typeText(tab, text, delayMs) {
for (let i = 0; i < text.length; i++) {
const char = text.charAt(i);
if (char !== '\n') playKeySound();
appendToTerminal(tab, char);
await delay(delayMs);
}
}

async function startBootSequence() {
const tab = getActiveTab();
tab.isProcessing = true;
tab.terminalElement.innerHTML = '';
for (const line of bootSequence) {
await typeText(tab, line.text, line.delay);
}
tab.isProcessing = false;
createPrompt(tab);
tab.terminalElement.focus();
}

function createPrompt(tab, subPrompt = '') {
const promptLine = document.createElement('div');
promptLine.className = 'prompt-line';
let promptText;
if (subPrompt) {
promptText = subPrompt;
} else if (tab.isPicMode) {
promptText = `pic>`;
} else {
const pathString = '~/' + tab.currentPath.join('/');
promptText = `${username}@${config.hostname}:${pathString}$`;
}
promptLine.innerHTML = `<span>${promptText} </span><span class="active-command-text"></span><span class="cursor"></span>`;
tab.terminalElement.appendChild(promptLine);
tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
tab.currentCommand = '';
}

function startNano(tab, filename) {
isNanoMode = true;
nanoOwningTabId = tab.id;
nanoTextarea.value = '';
nanoEditor.style.display = 'flex';
nanoTextarea.focus();
nanoEditor.dataset.filename = filename || 'untitled.txt';
}

function closeNano(force = false) {
const owningTab = tabs.find(t => t.id === nanoOwningTabId);
isNanoMode = false;
nanoOwningTabId = null;
nanoTextarea.value = '';
nanoEditor.style.display = 'none';

const activeTab = getActiveTab();
if (activeTab && (force || (owningTab && owningTab.id === activeTab.id))) {
activeTab.terminalElement.focus();
createPrompt(activeTab);
}
}

function saveNanoFile() {
const content = nanoTextarea.value;
const filename = nanoEditor.dataset.filename || 'untitled.txt';
const blob = new Blob([content], {
type: 'text/plain;charset=utf-8'
});
const url = URL.createObjectURL(blob);
const a = document.createElement('a');
a.href = url;
a.download = filename;
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

async function convertImageToAscii(file, maxWidth) {
return new Promise((resolve) => {
const charRamp = '`.-_:\'"~<,;=!*#$&@';
const image = new Image();
image.src = URL.createObjectURL(file);
image.onload = () => {
const canvas = document.createElement('canvas');
const aspectRatio = image.height / image.width;
canvas.width = maxWidth;
canvas.height = (maxWidth * aspectRatio) * 0.5;
const context = canvas.getContext('2d');
context.drawImage(image, 0, 0, canvas.width, canvas.height);
const pixelData = context.getImageData(0, 0, canvas.width, canvas.height).data;
let asciiText = '';
for (let i = 0; i < pixelData.length; i += 4) {
const r = pixelData[i],
g = pixelData[i + 1],
b = pixelData[i + 2];
const brightness = (0.21 * r + 0.72 * g + 0.07 * b) / 255;
const charIndex = Math.floor(brightness * (charRamp.length - 1));
asciiText += charRamp[charIndex] || ' ';
if (((i / 4) + 1) % canvas.width === 0) {
asciiText += '\n';
}
}
URL.revokeObjectURL(image.src);
resolve(asciiText);
};
});
}

function startPicMode(tab) {
picFileInput.onchange = (e) => {
const file = e.target.files[0];
if (!file) return;
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
picFileInput.click();
}

function showImageAndMenu(tab, imageData) {
const image = document.createElement('img');
image.src = imageData;
image.className = 'terminal-image';
image.onload = () => {
tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
};
const menu = document.createElement('span');
menu.textContent = text.picMenu;
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
const r = data[i],
g = data[i + 1],
b = data[i + 2];
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
const promptLines = tab.terminalElement.querySelectorAll('.prompt-line:last-child');
const promptLine = promptLines[0];
const promptText = promptLine.querySelector('span:first-child').textContent;
if (promptLine) {
promptLine.innerHTML = `<span>${promptText}</span><span>${input}</span>\n`;
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
const output = (text) => appendToTerminal(tab, text + '\n');
const promptLines = tab.terminalElement.querySelectorAll('.prompt-line:last-child');
const promptLine = promptLines[0];
if (promptLine) {
promptLine.innerHTML = `<span>pic> </span><span>${command}</span>\n`;
}
switch (command.toLowerCase()) {
case '1':
tab.picNextAction = 'compress';
createPrompt(tab, text.picPromptQuality);
return;
case '2':
tab.picNextAction = 'resize';
createPrompt(tab, text.picPromptWidth);
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
output(text.picSaving);
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
output(text.leavingPicMode);
break;
default:
output(text.picCommandNotFound);
break;
}
createPrompt(tab);
}

const commandHandlers = {
'pic': (tab, arg) => {
startPicMode(tab);
return false;
},
'ls': (tab, arg) => showFiles(tab),
'dir': (tab, arg) => showFiles(tab),
'cd': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
if (!arg || arg === '~') {
tab.currentPath = [];
} else if (arg === '..' || arg === 'cd..') {
tab.currentPath.pop();
} else {
const pathArg = arg.endsWith('/') ? arg.slice(0, -1) : arg;
const target = getNodeFromPath([...tab.currentPath, pathArg]);
if (target && target.type === 'folder') {
tab.currentPath.push(pathArg);
} else {
outputLine(`${text.cdError} ${arg}`);
}
}
},
'edit': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
const coderTool = fileSystem.content.tools.content.coder;
if (coderTool && coderTool.url) {
outputLine(text.openingCodeEditor);
window.open(coderTool.url, '_blank');
} else {
outputLine(text.codeEditorError);
}
},
'run': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
if (!arg) {
outputLine(text.runUsage);
return;
}
const fileToRun = findFileOrAlias(arg, tab.currentPath);
if (fileToRun && fileToRun.url) {
outputLine(`${text.openingApp} ${arg}...`);
window.open(fileToRun.url, '_blank');
} else {
outputLine(`${text.appNotFound} '${arg}' ${text.wasNotFound}`);
}
},
'play': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
const fileToPlay = findFileOrAlias(arg, tab.currentPath);
if (fileToPlay && fileToPlay.url) {
const url = fileToPlay.url;
if (url.endsWith('.mp4') || url.endsWith('.mkv')) {
if (tab.videoElement) tab.videoElement.remove();
outputLine(`${text.nowPlaying} ${arg}`);
const videoEl = document.createElement('video');
videoEl.className = 'terminal-video';
videoEl.src = url;
videoEl.controls = true;
videoEl.autoplay = true;
const refocusTerminal = () => tab.terminalElement.focus();
videoEl.addEventListener('play', () => {
const lastPrompt = tab.terminalElement.querySelector('.prompt-line:last-child');
if (lastPrompt) lastPrompt.scrollIntoView();
});
videoEl.onended = () => {
tab.videoElement = null;
refocusTerminal();
};
videoEl.addEventListener('fullscreenchange', () => {
if (!document.fullscreenElement) refocusTerminal();
});
tab.terminalElement.appendChild(videoEl);
tab.videoElement = videoEl;
} else if (url.endsWith('.mp3') || url.endsWith('.wav') || url.endsWith('.ogg')) {
audioPlayer.src = url;
audioPlayer.play();
audioOwningTabId = tab.id;
outputLine(`${text.playingSound} ${arg}. ${text.usePauseStop}`);
} else {
outputLine(`${text.filetypeNotSupported} '${arg}' ${text.isNotSupported}`);
}
} else if (arg) {
outputLine(`${text.mediaFileNotFound} '${arg}' ${text.wasNotFound}`);
} else {
if (audioPlayer.src && audioPlayer.paused) {
audioPlayer.play();
outputLine(text.resumingSound);
} else {
outputLine("Usage: play [mediafile]");
}
}
},
'pause': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
if (audioOwningTabId === tab.id && !audioPlayer.paused && audioPlayer.src) {
audioPlayer.pause();
outputLine(text.soundPaused);
}
},
'stop': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
if (audioOwningTabId === tab.id && audioPlayer.src) {
audioPlayer.pause();
audioPlayer.currentTime = 0;
audioOwningTabId = null;
outputLine(text.soundStopped);
}
},
'info': async (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
const fileForInfo = findFileOrAlias(arg, tab.currentPath);
if (fileForInfo && fileForInfo.url) {
try {
const response = await fetch(fileForInfo.url);
if (!response.ok) throw new Error('File not found at URL');
const htmlText = await response.text();
const match = htmlText.match(/<meta\s+name="description"\s+content="(.*?)"/i);
outputLine(match && match[1] ? `${arg}:\n  ${match[1]}` : `${text.noDescription} ${arg}.`);
} catch (error) {
outputLine(`${text.infoError} '${arg}'. ${text.corsError}`);
}
} else {
outputLine(arg ? `${text.mediaFileNotFound} '${arg}' ${text.wasNotFound}` : text.infoUsage);
}
},
'help': (tab, arg) => appendToTerminal(tab, introText, true),
'cls': (tab, arg) => {
playClearSound();
tab.terminalElement.innerHTML = '';
if (tab.videoElement) {
tab.videoElement.remove();
tab.videoElement = null;
}
},
'clear': (tab, arg) => commandHandlers.cls(tab, arg),
'date': (tab, arg) => appendToTerminal(tab, new Date().toLocaleString('en-US') + '\n'),
'whoami': (tab, arg) => appendToTerminal(tab, username + '\n'),
'history': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
tab.commandHistory.forEach((item, index) => outputLine(` ${index + 1}  ${item}`));
},
'echo': (tab, arg) => appendToTerminal(tab, arg + '\n'),
'calc': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
const safeExpression = /^[0-9\s\+\-\*\/\(\)\.]+$/;
if (safeExpression.test(arg)) {
try {
outputLine(eval(arg));
} catch (e) {
outputLine(`Error: ${e.message}`);
}
} else {
outputLine(text.calculatorError);
}
},
'notes': (tab, arg, args) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
const subCmd = args[0];
const noteText = args.slice(1).join(' ');
if (subCmd === 'add') {
tab.notes.push(noteText);
outputLine(text.noteAdded);
} else if (subCmd === 'list') {
if (tab.notes.length === 0) {
outputLine(text.noNotes);
} else {
tab.notes.forEach((note, index) => outputLine(`${index + 1}: ${note}`));
}
} else if (subCmd === 'clear') {
tab.notes = [];
outputLine(text.notesCleared);
} else {
outputLine(text.notesUsage);
}
},
'theme': (tab, arg) => {
const outputLine = (text) => appendToTerminal(tab, text + '\n');
if (arg === 'reset') {
document.documentElement.style.setProperty('--terminal-color', config.defaultColor);
outputLine(text.colorReset);
} else if (arg) {
document.documentElement.style.setProperty('--terminal-color', arg);
outputLine(text.colorChanged);
}
},
'nano': (tab, arg) => {
startNano(tab, arg);
return false;
},
'secret': (tab, arg) => appendToTerminal(tab, text.secretResponse + '\n'),
};

async function handleCommand(tab, command) {

const promptLines = tab.terminalElement.querySelectorAll('.prompt-line:last-child');
const promptLine = promptLines[0];
if (promptLine) {
let pathString = '~/' + tab.currentPath.join('/');
promptLine.innerHTML = `<span>${username}@${config.hostname}:${pathString}$ </span><span>${command}</span>\n`;
}

const [cmd, ...args] = command.trim().split(' ').filter(Boolean);
if (!cmd) {
createPrompt(tab);
return;
}
const arg = args.join(' ');
const handler = commandHandlers[cmd.toLowerCase()];

if (commandsWithSpacing.includes(cmd.toLowerCase())) {
appendToTerminal(tab, '\n');
}

if (handler) {
const shouldCreatePrompt = await handler(tab, arg, args);
if (commandsWithSpacing.includes(cmd.toLowerCase())) {
appendToTerminal(tab, '\n');
}

if (shouldCreatePrompt !== false) {
createPrompt(tab);
}
} else {
appendToTerminal(tab, `${text.commandNotFound} ${cmd}\n`);
createPrompt(tab);
}
}

document.body.addEventListener('keydown', async (e) => {
if (isNanoMode) return;
if (e.altKey) {
if (e.key.toLowerCase() === 't' || e.key.toLowerCase() === 'x') {
e.preventDefault();
}
if (e.key.toLowerCase() === 't') {
createNewTab();
} else if (e.key.toLowerCase() === 'x') {
if (activeTabId) closeTab(activeTabId);
}
}
if (awaitingUsername) {
e.preventDefault();
const usernamePromptText = document.getElementById('username-prompt-text');
if (e.key === 'Enter') {
username = username.trim() || config.defaultUsername;
awaitingUsername = false;
initAudio();
startBootSequence();
} else if (e.key === 'Backspace') {
username = username.slice(0, -1);
if (usernamePromptText) usernamePromptText.textContent = username;
} else if (e.key.length === 1 && !e.ctrlKey && !e.metaKey && !e.altKey) {
username += e.key;
if (usernamePromptText) usernamePromptText.textContent = username;
}
return;
}
const tab = getActiveTab();
if (!tab || tab.isProcessing) return;
if (document.activeElement === tab.terminalElement) {
e.preventDefault();
const commandTextEl = tab.terminalElement.querySelector('.prompt-line:last-child .active-command-text');
if (!commandTextEl) return;
tab.currentCommand = commandTextEl.textContent;
if (e.key === 'Enter') {
playReturnSound();
if (tab.currentCommand.trim() && !tab.isPicMode && !tab.picNextAction) {
tab.commandHistory.push(tab.currentCommand);
tab.historyIndex = tab.commandHistory.length;
}
tab.isProcessing = true;
if (tab.isPicMode) {
if (tab.picNextAction) {
await handlePicSubCommand(tab.currentCommand, tab);
} else {
await handlePicCommand(tab.currentCommand, tab);
}
} else {
await handleCommand(tab, tab.currentCommand);
}
tab.isProcessing = false;
} else if (e.key === 'Backspace') {
tab.currentCommand = tab.currentCommand.slice(0, -1);
commandTextEl.textContent = tab.currentCommand;
} else if (e.key === 'ArrowUp' && !tab.isPicMode) {
if (tab.historyIndex > 0) {
tab.historyIndex--;
tab.currentCommand = tab.commandHistory[tab.historyIndex];
commandTextEl.textContent = tab.currentCommand;
}
} else if (e.key === 'ArrowDown' && !tab.isPicMode) {
if (tab.historyIndex < tab.commandHistory.length - 1) {
tab.historyIndex++;
tab.currentCommand = tab.commandHistory[tab.historyIndex];
commandTextEl.textContent = tab.currentCommand;
} else {
tab.historyIndex = tab.commandHistory.length;
tab.currentCommand = '';
commandTextEl.textContent = '';
}
} else if (e.key === 'Tab') {
const parts = tab.currentCommand.split(' ').filter(Boolean);
if (parts.length === 0) return;
if (parts.length === 1) {
const fragment = parts[0].toLowerCase();
const matches = commandList.filter(cmd => cmd.startsWith(fragment));
if (matches.length === 1) {
tab.currentCommand = matches[0] + ' ';
commandTextEl.textContent = tab.currentCommand;
} else if (matches.length > 1) {
const activePromptLine = commandTextEl.parentElement;
const suggestionsDiv = document.createElement('div');
suggestionsDiv.textContent = matches.join('   ');
suggestionsDiv.style.cssText = 'padding-left: 15px; padding-top: 5px; padding-bottom: 5px;';
tab.terminalElement.insertBefore(suggestionsDiv, activePromptLine);
tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
}
} else if (parts.length >= 2) {
const command = parts[0].toLowerCase();
const argumentFragment = parts[parts.length - 1];
const currentNode = getNodeFromPath(tab.currentPath);
if (!currentNode) return;
let possibleMatches = [];
if (command === 'cd') {
possibleMatches = Object.keys(currentNode.content).filter(key => currentNode.content[key].type === 'folder');
} else if (['run', 'play', 'info', 'nano'].includes(command)) {
possibleMatches = Object.keys(currentNode.content);
}
const matches = possibleMatches.filter(item => item.startsWith(argumentFragment));
if (matches.length === 1) {
const completed = matches[0];
parts[parts.length - 1] = currentNode.content[completed].type === 'folder' ? completed + '/' : completed + ' ';
tab.currentCommand = parts.join(' ');
commandTextEl.textContent = tab.currentCommand;
} else if (matches.length > 1) {
const activePromptLine = commandTextEl.parentElement;
const suggestionsDiv = document.createElement('div');
suggestionsDiv.textContent = matches.join('   ');
suggestionsDiv.style.cssText = 'padding-left: 15px; padding-top: 5px; padding-bottom: 5px;';
tab.terminalElement.insertBefore(suggestionsDiv, activePromptLine);
tab.terminalElement.scrollTop = tab.terminalElement.scrollHeight;
}
}
} else if (e.key.length === 1 && !e.ctrlKey && !e.metaKey && !e.altKey) {
playKeySound();
tab.currentCommand += e.key;
commandTextEl.textContent = tab.currentCommand;
}
}
});

nanoTextarea.addEventListener('keydown', (e) => {
if (!isNanoMode) return;
if (e.ctrlKey) {
const key = e.key.toLowerCase();
if (key === 'x') {
e.preventDefault();
closeNano();
} else if (key === 'o') {
e.preventDefault();
saveNanoFile();
} else if (key === 'r') {
e.preventDefault();
readNanoFile();
}
}
});

nanoTextarea.addEventListener('paste', async (e) => {
if (!e.clipboardData || !e.clipboardData.files.length > 0) return;
const file = e.clipboardData.files[0];
if (file.type.startsWith('image/')) {
e.preventDefault();
const ascii = await convertImageToAscii(file, config.asciiWidth);
const pos = nanoTextarea.selectionStart;
const before = nanoTextarea.value.substring(0, pos);
const after = nanoTextarea.value.substring(pos);
nanoTextarea.value = before + ascii + after;
}
});

document.body.addEventListener('click', (e) => {
if (terminalFrame.contains(e.target) && !tabsContainer.contains(e.target)) {
getActiveTab()?.terminalElement.focus();
}
});

function init() {
createNewTab();
const firstTab = getActiveTab();
firstTab.terminalElement.innerHTML = `<h1>BabeLinux 6.9</h1><div class="prompt-line"><span>${text.welcome} </span><span id="username-prompt-text"></span><span class="cursor"></span></div>\n<pre style="font-family: 'Courier New', 'Consolas', monospace; font-size: 0.25rem; line-height: 0.80; white-space: pre; margin: 0;">
.............................................+*;+?+;%%%%?%%%%+;**%?++%%%%%%%%S*%?%*;**%S*++??+;?**++**++:;:::,;?%*;*??;.........................
............................................,++:*?+;%%%%?%%%%;;+*%*+;%%%%%%%%S+%?%+;+*%S?+;??+;?**++**:+*;+*?;:*%*;*?*;.........................
............................................,+;:**;+%%%??%%%?;;;*%++;%%%%%%%%%+%*?;;+?SS?+;?*;;?*++++*;;??*?S*,+?*;*?++.........................
............................................,;::*+;+%%%?%%%%?:;;+%;+;?%%%%%%%?+%+*:;+?SS?;:?*:;?*+;++*;;:%%??*,;?*;*?++.........................
............................................:;:;*+:*%%%?%%%%*:;:+%;;:?%%%%%%%*+?*+;++?SS?;:?+:;*++;;+*;;,;?***,,**;*?;+.........................
...........................................,;+:;*;:*%%%?%%%%*:;:+%:;:*%%%%%%%+++*;;++%SS*;;?;:;*++;;++;;,,*++;..+*;+?;+.........................
..........................................,:++,++;:?%%%?%%%?+:;:;%,;:*?%%%%%?++;*:;;*%SS*:;*:::*++;;++;;,,+;;:..:+;+*;;.........................
..........................................,,*;.++:,?%%%?%%%?+:;:;?,;:+*%%%%%*++:*:;;+%SS+:+*::;++;;;+++;,,:,,....;:*+;:.........................
...........................................:*,,++:,?%%%?%%??;;;:;?:;;;+%%%%%*;;;;:;;?SSS+:++,:;++;;;;:;:.;;:.....,:+;+,.........................
...........................................:+.,+;:,?%%%?%%?*;;;:;*:;;;;?%%%%+;,;:;;*%##S+;*+::;;*;::,::,.?;:.....,,+:;..........................
...........................................;;.,+;:;?%%%?%%?*;;;;;*:;;:;?%%%?+;,;:++*S##%++*;::;;*:,,::,..*,......,,;:;..........................
...........................................;,.:;+*+?%%%?%%?+;++;;+;;;;:*%%%?+:,+;++?SSS?++*:;;;;*,,;;...:*,......,,:::..........................
...........................................;,.,+?%+?%%%?%??+:;;::;;;+;:*%%%*+::++*+?%?*;;++:+;+;+,+?:.,,,?+:.....,:,;,..........................
..........................................,:,+%%%*;?%%%*%??+;+?++*++++;*%%%*+,;++*;;,....,,.:;;;::%*,,,::%;:...,.,,:;,..........................
..........................................::*%*++;;?%%%*%??+;*%+****+++*?%?+;:+++:.......,.,.:;+,*S;,,:::S;;,..,,.,:,...........................
..........................................:;%?++;;;*?%%*%%?;;*S*????**+*?%?+;:+;,........,.,.;:;;S*,,;;::%;;,..,,.,,:,..........................
.........................................,:+S?+;;;:*?%%*%%*;:;+;+++%*?+*?%*+:+*;;,.........,.+::+S+::;:,;%;;,,..,..,::..........................
.........................................::+S%*+;::+?%?*%?*:,....,,+?%**?%*+;+%**++:.......,,+::?%;:;;:,*?+:,,..,,..,:,.........................
........................................,,,+S%*++;:+?%?+%?*:,,......*S????*++?%%%S?;,.....,,:;::%?;;;;:,?*+,,,..,,,.,::.........................
........................................,,,+S%*+++;;*%?+%??;,:,,....;S?%??*;*%?S#%:,,,,,,,::+;:;S*;;;;:,?;;,,,...,,,,::,........................
.......................................,,,.*S%?*++;;*%?;%?*+,;?+....;S%%??*+?S%##S:,,,,,,,:;+;:;%;;+;:,:+;;.,,...,:,,::,........................
......................................,:,.,*S%?**++:*%?;%?*+:**:,.,,:SS%??**%SS##S+;,::::++*+*:;%::;;:,;;+;.,,...,:::::,........................
......................................,:;.,*S%?**+;:+%?;?%*+;++,,,,,:%#S%?*?S#####%*+;;;+??*+?,:*,,::,,?+:;,,....,::::,.........................
.....................................,,:*,,?S%?**++;+%*;?%?+;+?::,,,;?#S%??S######S%%???%S%**?,,+,,::,;+::;,,....,,,,...........................
....................................,,::*.,?%??***+;;%*;?%?*+;%*;::;+?#S%?S#######S?*???*%?*?+..:..,::?*;++,,...................................
....................................,.;;:..*?*****++:?*;*%?*;;?S??+??S##%?S#####SSSS%???%%*??:,....,,*?*,++,......,,............................
...................................,.,::..:::::;**++:?*;*%?*+:+SS%SS%?##%%#####SSSSS%%%%%?**?:;.....;%?;.;+,....:,,,............................
...................................,.:,.,+++++;::;;+:*+;?%%++:,?S%++*SS#S######SSS%%%%%%%*??+*:...,+??+,,;+.....,.,.............................
..................................,..:..:::::;;+;::+:*+;??%++;,+%SSS%SSS#######SSSSS%%%%?%*?;*,,..,***:,,,,.....,...............................
.................................,,..,,:::::::,:;;:::++;??%++;,+*%%%%%SSS#######SSSSSSSS%?***;:;....,,,,,.......................................
.................................,..,,,:::::,,,,,::,,;;;?*%+;;::?%%%%SSS#########SSSSSSS%+*+?:;;:....:;:.......,................................
................................,,..,,;;::::,,,..,::,;;;?*%+:;:,*SSSSSSS###SSSS###SSSSS%*++?*:;;;,..,:::.......,,...............................
................................,...,;+++;:,,,.....:;::;?+?+,::.:%SSSS####%?%%%S#####SS*;++?;:;;:,,.:;;:,....,,,,,..............................
...............................,,...,:::;++:,,.....,+::;?+*+,,:,.:?S######?*???%####S%*;;+??:;;;:,,,;;;:,....,,,:,..............................
...............................,,..,,,...,;+;,.....,+::;?+*+:.:,..,;*S####SSSSSS###S%+;;+*%*:;+:,,,,+;+:,....,::::,.............................
...............................,..,,,......:;:,.....+,:;?+++:.,,...,++*%##########S?++++;?%;:+;:,,,:+;+;,....,::::,.............................
...............................,..,,,.......:;:.....+,:+?;;+:..,..+%%*+;+%S#####S%*++++;+%?:;*;,,,.;+;+;,.....:::,,.............................
...............................,,,,,....,,...:;,....+,:+?;;+,...,?##S?*;,:*%S#S?*+++++;;*%*:**:.,,,+++;;,.....::,...............................
...............................,,,,,,,,,,:,..,;,....+.:*?;:;,...:S###%*;:;****+**+++++;+?%;:?;,.,,:+;*;;,.....,,................................
...............................,,,,,,:::::,...;:...,;.,?*;,;,.....,+#S?;:+********+++;;+??:+?:..,.;*+*;;,.....,,................................
..............................,,,,,,::::::,...::...:;.,%+:,:,.......:%*::*********++;;+*%+:?+:..,.;++*;:,......,................................
.............................,,,,,,,,::::,....::...:,.:%+:,:,,,......;*,;*********+++++*?;;?:,..,,++**;:........................................
.............................,,,,,,,,,:,,.....::...:.,+%;:,:,...,..,:,;,;*********+++;;**:*?,...,:++?+;,,....,..................................
............................,,,,,,,,,,,,......::...:..*?:,,,..,,.,:::,:,;*********++:,;*+:?+.....:++?;:;:...:,..................................
...........................,,,,,,,,,,,.......,;,...,..?+:,,,,,.,:;,:;:;,:********+;,.,+*;+?:.....;+*?;:*:.,:;,..................................
..........................,,,,,,,,,,,........,:......,%;:,,,.,:;;;:;S*+,,+******+;,.:+**;*?,,...,;+?*:++::;+:...................................
..........................,,,,,,,,,..................;?::.,,:;;+++;,?*+:.;***+;:;::,:++*:?+:,...:++?+:*;::;;,...................................
.........................,,,,,,,,,...................**::::;++***++:+**;,;++;:,,;;,,:;++;?:,....:;+?;+*;::;:....................................
....................,...,,,,,,,,,.................;**%:;***??****??;:?%;;:,,..:+*+,:;++;;?,....,::**;*;::;::....................................
...................,,..,,,,,,,,................,;?S#%?:+%??%???????+,?%;+*:.,;+*SS;:;++:+*.....,,:*+++:::;;,....................................
..................,,...,,,,,,,................;%####%;:?S%SS%%?????+,??;*?:,+?*S#?:,:+;:+;.....,.:*;;;:::;::....................................
..................,,..,,,,,,,...............,?#####S?,*##SSS%%?????;:**+;;,+S?S?:,:;;+;:+:.....;.;*;:::,;+,:....................................
.................,,,,,,,,,,............,...;S######%:;#####S%%?????;:*:,.,;**%+,:;;+;;;:+,....:,,++:::,:+:,:....................................
.................,,,,,,,,,............,...+####S##S*:#####SS%%????*;;;,..:***:,+**+*+;::+,...,,.,+;,::,:+,,:....................................
................,,,,,,,,,.....,......,...*####S###?;######SS%%????+;:+;.,++;,;*??****;:,;,..,,.,,;:,:,,;;.,:....................................
................,,,,,,,,....,,......,...+###SS###%+S######SS%%????;::*;,;;:,+*????***;:,;,..,.,,,;:,:,,+,..:....................................
................,,,,,,,....,,......,...+###S#####?S#######SS%%???*:,:::,:,:+???????**+;,:,..,::,,:,:,,,+...,....................................
...............,,,,,,,...,,,......,..,+S##S#####SS#######SS%%???*;,::::::+*?%%%%%%?***+,,,.,,::,,,,,.,::...,....................................
...............,,,,,...,,,..........,;%##S##############SSS%%???+::;;::;+*?%%%SSS%%?*?+,,,.,,::.,:,,..:,........................................
...............,,,...,,,,..........,:*SS%S#############SSS%%???*;++*+,:+*?%SSSSSSSS?*%+:,,.:,:,.:;,..,:,........................................
...............,....,,,............:+%S%S#############SSS%%%??*++?*;,,+*%S########S??%+;,,.,,:,.:;,.,,:,........................................
...............,..................,+*%%%SS###########SSS%%%??*+;+;;,.;*%##########S%%%*+:,.,,:,.:;,,,,,....,....................................
.................................,;*?%?%SSSS######SSSSS%%%???*+;::,.,*%###########SSS%?**:.,.,,,:;,,,:,....,....................................
................................,,+*?%?%%SSSSSSSSSSSSS%%%???+++:,:..;%####@@########S%%??+,,...,,;,,,,....,,....................................
...............................,,;*+???%%%SSSSSSSSSS%%%????+:;++:..,?S####@@@#######S%%%%?:...,.,:,::,...,.,....................................
..............................,:,+*:*???%%%%%%S%%%%%%%???*+:,;**,..+S####@@@@#######S%SS%%;...,.:,,:::,.,:.,,...................................
.............................,:,:*;:*????%%%%%%%%%%%????*+::::*+..:%###@@@@@@@######SSSS%?*....,:,,::::,:,.,,...................................
.........................,...;,,;+:,*?????????%%???????*+::::,:,,.*S###@@@@@#########SSS%%%,.,.,:::::::::...:...................................
........................,...::,:;::,;????????????????**+::::,..,,:%####@@@@@@########SSS%%%:...::::::::::...:...................................
.......................,...:+:,:;:,.,*?????????????***+::::,....:*S###@@@@@@@########SSS%%?+..,:::::::::,,..:...................................
.....................,,....+;,,:::...;%???????????****+:,,.....,+?S##@@@@@@@@########SSS%%?*..,:::::::::..,,:...................................
....................:,....;+:,,:,,..,,?%????????????*+*,.....,,;*?#####@@@@@#########SSS%%??..,,::,,:::,...,:...................................
...................::....,*::.,,,.,,..:%%???????????++;....,:::+*%###################SSS%%??..,,:,,,::,.....:...................................
..................;;,....++:,.,,,,:....;%%????***??*::,...::::;+*?S##################SSS%%??...,,,,,::......;...................................
.................;+:....:*::...,,:,.....;%%%%??**+++,.,:.,:,,:++**%#################SSSS%%??...,,.,,,,.....,;...................................
................:*;.....++,:..,::,.......;?%%%%%??*;..;;,.,..:;++*?%S###############SSS%%???.......,,......,;...................................
...............,?+.....:*;,,..:;,........:;+?SS%%%?*,,:;,...,+++**?%SS#############SS%S%%???.......,.......,+...................................
...............+?:.....++::,.,;:,........;;;;;*%%%%?:..,....:*??????%SSS##########SS%%%%???*.......,.......,+...................................
..............,?+.....,*;::..::,........,;;;;;;;;;;;,..,::.,;*??????%%SSSS######SSSS%%%????+...............:;...................................
..............;?:.....;*;,:,::,.........:;;;;;;;;;;;...,;:,;+;+??????%%%SSSSSSSSSSS%%%%???%:......,.....,..;;...................................
..............+*......+*;.,,:,..........:+?+;;;;;;;;,...:,,:+?*+*?????%%%%SSSSSS%%%%??????%.............,..+:...................................
..............*+......*+;;,:,..,,.......;?#S%*;;;;;;,..,::,:;+??????????%%%%%%%%%%???????%*......,......,..*:...................................
..............+;.....:*;++,,..,,,......,+%###S?+++++;,;+;:.,:;+????????????%%%%%???*?????%:.....,......,,.,?,...................................
..............::.....;*+++,..::,......:;*#####S%**????%%*,,;;;;+*?????????????????***???%*.....,,......,,.:?....................................
...............,.....;;;;+,.,:,.......+;?#######%*???%S#%:+S*;;;;*?????**??????******????:.....,,......,,.;*....................................
.....................:,::;;,:,........*;*########S?????%?,*#S?+++;+*???**************???;.....,,,......:,.*+....................................
....................,,..:;;:,.........*++#########S%????*,*##S*+++;;*???************??%+......:,,......:..?:....................................
...................,:...,:;:..........**+###########%???+,+S##S*+++;;*????*********???+,.....,:,,......:.:*.....................................
..................,:.....,::,........,*%+S###########S%?;,+?%##S*+++;;+?%????***???%?;,.....,::,.......:.*;.....................................
.................,:.......,::........:+S*%#############%:,*???S#S?+++;;;+???????%%*;,.......:::,......,;,*,.....................................
................::.........,,........;*?%?###########S#?,;??**?%S#%*++;;;;;+***+;,.........,::,.......,;;;......................................
...............,;...................,;?*S%###########?+;:?#%???%#SSS?+;;;;;;;;;;...........:::........,;+,......................................
</pre>
`;
firstTab.isProcessing = false;
firstTab.terminalElement.focus();
}

init();
window.addEventListener('focus', () => {
const activeTab = getActiveTab();
if (!document.fullscreenElement && activeTab) {
activeTab.terminalElement.focus();
}
});

document.body.addEventListener('click', () => {
const activeTab = getActiveTab();
if (activeTab) {
const activeEl = document.activeElement.tagName.toLowerCase();
if (activeEl !== 'input' && activeEl !== 'textarea' && activeEl !== 'video') {
activeTab.terminalElement.focus();
}
}
});
</script>
</body>
</html>