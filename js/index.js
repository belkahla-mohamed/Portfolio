function animateCounter(counter){
    const updateCount = () => {
        const target = +counter.getAttribute('data-count');
        const count = +counter.innerText;
        const speed = 200; 

        const increment = target / speed; // increment = zyada

        if(count < target){
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target;
        }
         
    };
    updateCount();
}

document.addEventListener("scroll", () =>{
    const counters = document.querySelectorAll('.counter span');
    const scrollPosition = window.scrollY + window.innerHeight;


    counters.forEach(counter => {
        const counterPosition = counter.getBoundingClientRect().top + window.scrollY;

        if(scrollPosition > counterPosition){
            if(counter.innerText === '0'){
                animateCounter(counter);
            }
            else{
                counter.innerText = '0';
            }
        }
    });
});
