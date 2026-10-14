function fit() {
  document.documentElement.style.zoom = window.innerWidth / 1968;
}

window.addEventListener("resize", fit);
fit();