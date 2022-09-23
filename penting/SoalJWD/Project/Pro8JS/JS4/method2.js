class Animal {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
  
  greet() {
    console.log("Halo");
  }

  info(){
  	console.log(`Nama saya adalah ${this.name}`);
  	console.log(`Saya berusia ${this.age} tahun`);
  }
  
  // Tambahkan method info
  
  
}

const animal = new Animal("Leo", 3);
animal.greet();
animal.info();

// Panggil method info menggunakan constant animal

