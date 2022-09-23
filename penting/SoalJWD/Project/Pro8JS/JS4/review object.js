// Definisikan constant animal
const animal = {
	name 	: "leo",
	age  	: 3,
	greet 	: ()=> {
		console.log("Hallo");
	}

}


// Print property name milik constant animal
console.log(animal.name);


// Panggil greet method property milik animal
animal.greet();

