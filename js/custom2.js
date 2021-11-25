
var border = document.getElementsByClassName('border');

	var i;
	for ( i = 0; i < border.length ; i++) {
		border[i].addEventListener("click", function(){

			
			this.classList.toggle("change-color");
			var icon = this.children[0];
			var plus = icon.children[0];
			var minus = icon.children[1];
			plus.classList.toggle("svg-none");
			minus.classList.toggle("svg-active");
			var body =this.children[1];
			console.log(body);
			if (body.style.maxHeight) {
				body.style.maxHeight = null;
			}else{
				body.style.maxHeight = body.scrollHeight + "px"
			}
		});
	}
	var disease = document.getElementById('disease');
	var spreads= document.getElementById('spreads');
	var protecty= document.getElementById('protecty');
	var symptomsy= document.getElementById('Symptoms');
	var outbreak= document.getElementById('outbreak');
	var myth= document.getElementById('myth');
	disease.style.display = "block";
	spreads.style.display = "none";
	protecty.style.display = "none";
	symptomsy.style.display = "none";
	outbreak.style.display = "none";
	myth.style.display = "none";



	function myFunction(){
		if (disease.style.display === "none") {
			disease.style.display ="block";
			spreads.style.display ="none";
			protecty.style.display ="none";
			symptomsy.style.display ="none";
			outbreak.style.display ="none";
			myth.style.display ="none";
		}
	}
	function myFunction1(){
		if (spreads.style.display === "none") {
			disease.style.display ="none";
			spreads.style.display ="block";
			protecty.style.display ="none";
			symptomsy.style.display ="none";
			outbreak.style.display ="none";
			myth.style.display ="none";
		}
	}
	function myFunction2(){
		if (protecty.style.display === "none") {
			disease.style.display ="none";
			spreads.style.display ="none";
			protecty.style.display ="block";
			symptomsy.style.display ="none";
			outbreak.style.display ="none";
			myth.style.display ="none";
		}
		
	}
	function myFunction3(){
		if (symptomsy.style.display === "none") {
			disease.style.display ="none";
			spreads.style.display ="none";
			protecty.style.display ="none";
			symptomsy.style.display ="block";
			outbreak.style.display ="none";
			myth.style.display ="none";
		}
	}
	function myFunction4(){
		if (outbreak.style.display === "none") {
			disease.style.display = "none";
			spreads.style.display = "none";
			protecty.style.display = "none";
			symptomsy.style.display = "none";
			outbreak.style.display = "block";
			myth.style.display = "none";
		}
	}
	function myFunction5(){
		if (myth.style.display === "none") {
			disease.style.display ="none";
			spreads.style.display ="none";
			protecty.style.display ="none";
			symptomsy.style.display ="none";
			outbreak.style.display ="none";
			myth.style.display ="block";
		}
	}
	let link = document.querySelectorAll('header .header-container .top-bar nav ul li a');

	for (let j = 0; j < link.length; j++) {
    link[j].addEventListener('click', function() {
        for (let i = 0; i < link.length; i++) {
            link[i].classList.remove('active');
        }
        console.log(this);
        this.classList.add('active');
    })
}
let link2 = document.querySelectorAll('.questions .questions-boxs .question-left ul li');

	for (let j = 0; j < link2.length; j++) {
    link2[j].addEventListener('click', function() {
        for (let i = 0; i < link2.length; i++) {
            link2[i].classList.remove('active');
        }
        console.log(this);
        this.classList.add('active');
    })
}
var sections = document.querySelectorAll('section');

onscroll = function () {
var scrollPosition = document.documentElement.scrollTop;

sections.forEach( section => {
  if ( scrollPosition >= section.offsetTop&& scrollPosition < section.offsetTop + section.offsetHeight){
    var currentId = section.attributes.id.value;
    removeAllActiveClasses();
    addActiveClass(currentId);
  }
}   
)
};

var removeAllActiveClasses = function () {

  document.querySelectorAll('nav a').forEach( el => {
    el.classList.remove("active");
  }
  )
};

var addActiveClass= function (id) {
console.log(id);
var selector = `nav a[href="#${id}"]`;
document.querySelector(selector).classList.add("active");

}

