// Animate on scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }
        else{
            entry.target.classList.remove("show");
        }
    })
})

// Display Logic
const high_score = document.getElementById("high-score");

const scores = [50, 150, 250, 450, 50, 350, 100];
const records = ["WIN", "LOSS", "WIN", "LOSS", "LOSS", "WIN", "WIN"];

let div_list = [];

const entrybox = document.getElementById("entrybox");

function display(){
    let high = 0;
    document.getElementById("search-error").style.opacity = 0;
    for(let i = 0; i < div_list.length; i++){
        entrybox.removeChild(div_list[i]);
    }
    div_list = [];

    for(let i = 0; i < scores.length; i++){
        div_list.push(document.createElement("div"));
        div_list[i].classList.add("entry");

        if(scores[i] > high){
            high = scores[i];
        }
        
        div_list[i].innerHTML = `<p>${scores[i]}</p> <p>${records[i]}</p>`;

        div_list[i].style.cursor = "pointer";
    
        entrybox.appendChild(div_list[i]);
        setTimeout(() => {
            observer.observe(div_list[i]);
        }, 200*i)
    }
    high_score.innerText = high;

    if(!div_list.length){
        document.getElementById("search-error").style.opacity = 1;
        high_score.innerText = "00"
    }
}

// Integration Logic
window.onload = () => {
    // Retrieve passwords on window load
    display();
}