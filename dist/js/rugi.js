function read() {
	var height_kertas = document.getElementById("page").offsetHeight;
	var height_gambar = document.getElementById("sub").offsetHeight;
	var hk = height_kertas*0.026458;
	var hg = height_gambar*0.026458;
	var kertas = hk-hg;
	var hitung = kertas*50;
	if (Math.ceil(kertas)==30) {
		document.getElementById('printp').innerHTML = "Kerugian : Rp.0";
	}else{
		document.getElementById('printh').innerHTML = "Sisa kertas: "+Math.ceil(kertas)+" cm";
		document.getElementById('printp').innerHTML = "Kerugian : Rp."+Math.ceil(hitung);
	}

}