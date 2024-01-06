alert("xoxoxo");

const dogs = document.querySelectorAll(".item");

dogs.forEach(dog => dog.addEventListener("click", () => removeDog(dog)));


function removeDog(dog) {
    const name = dog.querySelector("p");
    console.log(name.textContent);

    dog.remove();