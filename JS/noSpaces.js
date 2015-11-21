$('#username').on({
  keydown: function(e) {
    if (e.which === 32) {
      e.preventDefault();
    }
  },
  change: function() {
    if (!(this.value.indexOf(' ') == -1)) {
      alert("Spaces are not allowed in the username and have therefor been removed");
      this.value = this.value.replace(/\s/g, "");
    }
  }
});