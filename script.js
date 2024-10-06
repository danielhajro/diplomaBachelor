
 const hamburger = document.querySelector(".hamburger1");
 const navMenu = document.querySelector(".nav-menu1");
 
 hamburger.addEventListener("click", mobileMenu);
 
 function mobileMenu() {
     hamburger.classList.toggle("active");
     navMenu.classList.toggle("active");
 }
 
 const navLink = document.querySelectorAll(".nav-link1");
 
 navLink.forEach(n => n.addEventListener("click", closeMenu));
 
 function closeMenu() {
     hamburger.classList.remove("active");
     navMenu.classList.remove("active");
 }
// Show more Faqja Pare
const show=document.getElementById('prodmore');
const more=document.getElementById('prodmore1');
const less=document.getElementById('prodmore2');
function showM(){
  show.style.display='block';
  prodmore1.style.display='none';
  prodmore2.style.display='inline-block';
}
function lessM(){
  show.style.display='none';
  prodmore1.style.display='inline-block';
  prodmore2.style.display='none';
}

 //Produkte sort

 const gjitha=document.getElementById('gjitha');
 const frut = document.getElementById('frut');
 const perim= document.getElementById('perim');
 const bulmet= document.getElementById('bulmet');
 const mish= document.getElementById('mish');

 frut.addEventListener('click', () => {
   const frutat= document.getElementsByClassName('frutat');
   const perimet = document.getElementsByClassName('perimet');
   const bulmetet = document.getElementsByClassName('bulmetet');
   const mishrat = document.getElementsByClassName('mishrat');
 
   for (const perime of perimet) {
    perime.style.display = 'none';
   }
   for (const bulmeti of bulmetet) {
    bulmeti.style.display = 'none';
    }
    for (const mishi of mishrat) {
     mishi.style.display = 'none';
    }
    for (const fruti of frutat) {
        fruti.style.display = 'block';
    }
   
 });
 perim.addEventListener('click', () => {
    const frutat= document.getElementsByClassName('frutat');
    const perimet = document.getElementsByClassName('perimet');
    const bulmetet = document.getElementsByClassName('bulmetet');
    const mishrat = document.getElementsByClassName('mishrat');
  
    for (const fruti of frutat) {
     fruti.style.display = 'none';
    }
    for (const bulmeti of bulmetet) {
     bulmeti.style.display = 'none';
     }
     for (const mishi of mishrat) {
      mishi.style.display = 'none';
     }
     for (const perimi of perimet) {
        perimi.style.display = 'block';
    }
    
  });
 bulmet.addEventListener('click', () => {
    const frutat= document.getElementsByClassName('frutat');
    const perimet = document.getElementsByClassName('perimet');
    const bulmetet = document.getElementsByClassName('bulmetet');
    const mishrat = document.getElementsByClassName('mishrat');
  
    for (const fruti of frutat) {
     fruti.style.display = 'none';
    }
    for (const perime of perimet) {
     perime.style.display = 'none';
     }
     for (const mishi of mishrat) {
      mishi.style.display = 'none';
     }
     for (const bulmeti of bulmetet) {
        bulmeti.style.display = 'block';
    }
    
  });
  mish.addEventListener('click', () => {
    const frutat= document.getElementsByClassName('frutat');
    const perimet = document.getElementsByClassName('perimet');
    const bulmetet = document.getElementsByClassName('bulmetet');
    const mishrat = document.getElementsByClassName('mishrat');
  
    for (const fruti of frutat) {
     fruti.style.display = 'none';
    }
    for (const perime of perimet) {
     perime.style.display = 'none';
     }
     for (const bulmeti of bulmetet) {
      bulmeti.style.display = 'none';
     }
     for (const mishi of mishrat) {
        mishi.style.display = 'block';
    }
  });
  gjitha.addEventListener('click', () => {
    const frutat= document.getElementsByClassName('frutat');
    const perimet = document.getElementsByClassName('perimet');
    const bulmetet = document.getElementsByClassName('bulmetet');
    const mishrat = document.getElementsByClassName('mishrat');
  
    for (const fruti of frutat) {
     fruti.style.display = 'block';
    }
    for (const perime of perimet) {
     perime.style.display = 'block';
     }
     for (const bulmeti of bulmetet) {
      bulmeti.style.display = 'block';
     }
     for (const mishi of mishrat) {
        mishi.style.display = 'block';
    }
  });



function tableToExcel(){
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("table.table"));
}