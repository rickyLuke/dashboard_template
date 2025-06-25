var nav_clicked;

function toggle_menu() {	

	document.querySelector('#mobile_menu').addEventListener('click', (e)=>{		

		document.querySelector('#mobile_menu').innerHTML = "";

		if(nav_clicked === undefined) {	

			document.querySelector('#menu').classList.toggle('hide');
			document.querySelector('#main').classList.toggle('slide');
			
			document.querySelector('#mobile_menu').innerHTML = '<span class="fa-solid fa-xmark" style="color: red"></span>';

			return nav_clicked = true;
		}
		else {

			document.querySelector('#menu').classList.toggle('hide');
			document.querySelector('#main').classList.toggle('slide');

			document.querySelector('#mobile_menu').innerHTML = '<span class="fa-solid fa-bars"></span>';

			return nav_clicked = undefined;
		} 

			
	});
}

// menu interactions
toggle_menu();