const textarea1 = document.getElementById("textarea1");
const codeBlock = document.getElementById("codeBlock");

function updateCode() {
  let content = textarea1.value;
  content = content.replace(/&/g, "&amp;");
  content = content.replace(/</g, "&lt;");
  content = content.replace(/>/g, "&gt;");
  codeBlock.innerHTML = content;
  highlightJS();
}

function highlightJS() {
  document.querySelectorAll("pre code").forEach((el) => {
    hljs.highlightElement(el);
  });
}

textarea1.addEventListener("input", () => {
  updateCode();
});

textarea1.addEventListener("scroll", () => {
  codeBlock.scrollTop = textarea1.scrollTop;
  codeBlock.scrollLeft = textarea1.scrollLeft;
});

textarea1.addEventListener("keydown", function (e) {
  if (e.key === "Enter") {
    e.preventDefault();
    var cursorPos = textarea1.selectionStart;
    var prevLine = textarea1.value.substring(0, cursorPos).split("\n").slice(-1)[0];
    var indent = prevLine.match(/^\s*/)[0];
    textarea1.setRangeText("\n" + indent, cursorPos, cursorPos, "end");
    textarea1.blur();
    textarea1.focus();
    updateCode();
    return;
  }
  if (e.key === "Tab" && !e.shiftKey && textarea1.selectionStart == textarea1.selectionEnd) {
    e.preventDefault();
    let cursorPosition = textarea1.selectionStart;
    let newValue = textarea1.value.substring(0, cursorPosition) + "    " + textarea1.value.substring(cursorPosition);
    textarea1.value = newValue;
    textarea1.selectionStart = cursorPosition + 4;
    textarea1.selectionEnd = cursorPosition + 4;
    updateCode();
    return;
  }

  if (e.key === "Tab" && e.shiftKey && textarea1.selectionStart == textarea1.selectionEnd) {
    e.preventDefault();

    let cursorPosition = textarea1.selectionStart;
    let leadingSpaces = 0;
    for (let i = 0; i < 4; i++) {
      if (textarea1.value[cursorPosition - i - 1] === " ") {
        leadingSpaces++;
      } else {
        break;
      }
    }

    if (leadingSpaces > 0) {
      let newValue = textarea1.value.substring(0, cursorPosition - leadingSpaces) + textarea1.value.substring(cursorPosition);
      textarea1.value = newValue;
      textarea1.selectionStart = cursorPosition - leadingSpaces;
      textarea1.selectionEnd = cursorPosition - leadingSpaces;
    }

    updateCode();
    return;
  }

  if ((e.key == "Tab") & (textarea1.selectionStart != textarea1.selectionEnd)) {
    e.preventDefault();
    let lines = this.value.split("\n");

    let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
    let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;

    let spacesRemovedFirstLine = 0;
    let spacesRemoved = 0;

    if (e.shiftKey) {
      for (let i = startPos; i <= endPos; i++) {
        lines[i] = lines[i].replace(/^ {1,4}/, function (match) {
          if (i == startPos) spacesRemovedFirstLine = match.length;
          spacesRemoved += match.length;

          return "";
        });
      }
    } else {
      for (let i = startPos; i <= endPos; i++) {
        lines[i] = "    " + lines[i];
      }
    }
    let start = this.selectionStart;
    let end = this.selectionEnd;
    this.value = lines.join("\n");
    this.selectionStart = e.shiftKey ? start - spacesRemovedFirstLine : start + 4;
    this.selectionEnd = e.shiftKey ? end - spacesRemoved : end + 4 * (endPos - startPos + 1);
    updateCode();
    return;
  }
  if (e.shiftKey && (e.key === "Delete" || e.key === "Backspace")) {
    e.preventDefault();
    let startPos = this.value.substring(0, this.selectionStart).split("\n").length - 1;
    let endPos = this.value.substring(0, this.selectionEnd).split("\n").length - 1;
    let cursorLine = this.value.substring(0, this.selectionStart).split("\n").pop();
    let cursorPosInLine = cursorLine.length;
    let totalLinesRemove = endPos - startPos + 1;
    let lines = this.value.split("\n");
    let newStart = lines.slice(0, startPos).join("\n").length + (startPos > 0 ? 1 : 0);
    lines.splice(startPos, totalLinesRemove);
    let newLine = lines[startPos] || "";
    if (newLine.length < cursorPosInLine) {
      cursorPosInLine = newLine.length;
    }
    newStart += cursorPosInLine;

    this.value = lines.join("\n");
    this.selectionStart = this.selectionEnd = newStart;
    updateCode();
    return;
  }

  if (e.key === "Home") {
    let line = this.value.substring(0, this.selectionStart).split("\n").pop();
    let cursorPosInLine = line.length;
    let lineStartPos = this.value.substring(0, this.selectionStart).lastIndexOf("\n") + 1;
    let firstNonWhitespacePos = line.search(/\S/);
    if (firstNonWhitespacePos >= cursorPosInLine) {
      return true;
    } else if (firstNonWhitespacePos === -1) {
      return true;
    }
    e.preventDefault();
    this.selectionStart = this.selectionEnd = lineStartPos + firstNonWhitespacePos;
    return;
  }
});

document.getElementById("selectStyle").addEventListener("change", (e) => {
  document.getElementById("theme1").href = `https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/${e.target.value}`;
});

function updateFont() {
  let selectFont = document.getElementById("selectFont");
  let fontName = selectFont.options[selectFont.selectedIndex].text;
  let fontNameUrl = fontName.replace(" ", "+");
  let inputFontSize = document.getElementById("inputFontSize");
  document.getElementById("style2").textContent = `
            @import url('https://fonts.googleapis.com/css2?&display=swap&family=${fontNameUrl}');
            pre, code, textarea {
                font-family: "${fontName}", monospace !important;
                font-size: ${inputFontSize.value}pt !important;
            }`;
}

document.getElementById("selectLanguage").addEventListener("change", function () {
  document.getElementById("codeBlock").className = this.value;
  highlightJS();
});

document.getElementById("inputFontSize").addEventListener("input", () => {
  updateFont();
});

document.getElementById("selectFont").addEventListener("change", () => {
  updateFont();
});

function loadSampleHtml() {
  fetch("/Textarea-As-Editor.aspx")
    .then((response) => response.text())
    .then((html) => {
      textarea1.value = html.trim();
      updateCode();
    });
}

window.onload = function () {
  setTimeout(loadSampleHtml, 250);
};
