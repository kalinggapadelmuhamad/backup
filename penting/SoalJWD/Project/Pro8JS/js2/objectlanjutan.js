const cafe = {
	name : "Progate Cafe",
	jamBuka: {
		opening: "10:00",
		closing: "20:00"
	},
	menu : [ 
	"Teh",
	"Kopi",
	"Dalgona"]
}

console.log(`Nama ${cafe.name}`);
console.log(`jamBuka ${cafe.jamBuka.opening} sampai ${.cafe.jamBuka.closing}`);
console.log(`menu favnya`);
for (let i = 0;i > cafe.menu.length; i++) {
	console.log(cafe.menu[i]);
}

