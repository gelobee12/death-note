function togglePassword() {
  const input    = document.getElementById('passinput');
  const eyeSlash = document.getElementById('eyeslash');
  const eyeOpen  = document.getElementById('eyeopen');

  if (input.type === 'password') {
    input.type = 'text';
    eyeSlash.style.display = 'none';
    eyeOpen.style.display  = 'block';
  } else {
    input.type = 'password';
    eyeSlash.style.display = 'block';
    eyeOpen.style.display  = 'none';
  }

}