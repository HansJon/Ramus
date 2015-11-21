$('#username').on({
  keypress: function(e) {
    if (e.which === 64) {
      e.preventDefault();
    }
  },
  change: function() {
    if (!(this.value.indexOf('@') == -1)) {
      alert("At signs are not allowed in the username and have therefor been removed");
      this.value = this.value.replace("@", "");
    }
  }
});