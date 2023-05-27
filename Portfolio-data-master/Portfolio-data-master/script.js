// ScrollReveal().reveal(".gambarprofil,.nameprofil,.titleprofile", { delay: 150 });
// ScrollReveal().reveal(".nameprofil", { delay: 300 });
// ScrollReveal().reveal(".titleprofile", { delay: 450 });

const sr = ScrollReveal({
  origin: "top",
  ditance: "30px",
  duration: 800,
  reset: true,
});

sr.reveal(
  `.gambarprofil,.nameprofil,.titleprofile,
.textabout,.about1,.about2,.textproject,
.card,.textcontact,.form-label,.form-control`,
  {
    interval: 200,
  }
);
