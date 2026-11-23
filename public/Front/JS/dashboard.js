

let started = false;
 // Function Started ? No window.onscroll = function ()
$(window).scroll(function(){

	let nums = document.querySelectorAll(".Number_static");

	if($(window).scrollTop() >= $(".info-box-icon").offset().top){

		if (!started)
		{ nums.forEach((num) => startCount(num)); } started = true; }
});


function startCount(el) {
	let target = el.dataset.target;
	let ourcounter = setInterval(() =>
	{ el.textContent++; if (el.textContent == target) { clearInterval(ourcounter); } }, 2000 / target); }


function printcontent(ex){
var printcontent=document.getElementById('example1').outerHTML;

// document.write(printcontent);
document.body.outerHTML=printcontent;

document.querySelector('.inf').style.display='none';
document.querySelector('.fltrow').style.display='none';


let divs=document.querySelectorAll('.no-print');

    divs.forEach((div) => {
                      div.style.display='none';
                });


window.print();

 location.reload();

}



//type - passowrd in js
function  pt_seen()  {
document.getElementById('password').type='text';
document.getElementById('pt_seen1').style.display='block';
document.getElementById('pt_seen').style.display='none';
}



function  pt_seen1()  {

document.getElementById('password').type='password';
document.getElementById('pt_seen').style.display='block';
document.getElementById('pt_seen1').style.display='none';
}

//  function  loading()   {


// // document.querySelector('.preloader').style.display='none';

// document.querySelector('.summary').click();

// }

var table2excel = new Table2Excel();

      document.getElementById('export').addEventListener('click', function() {

        table2excel.export(document.querySelectorAll('#example1'));

      });




//print()

  const form = document.getElementById("myForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault();    // remove this if you want normal form submit

  });



function Clientfx(){

let Clientselector=document.querySelector('#Clientselector').value;

if(Clientselector =='add-individual_Client'){


document.querySelector('#Clientselector').setAttribute('data-target',"#customer-add");
// x.dataset.target="#customer-add";
// document.querySelector('#customer-add').setAttribute('style',"display:block");


}else{

document.querySelector('#Clientselector').setAttribute('data-target',"#client-add");

}

}





function Receiptsfx(){

let Receiptsselector=document.querySelector('#Receiptsselector').value;

if(Receiptsselector =='add-Client_Receipts'){


document.querySelector('#Receiptsselector').setAttribute('data-target',"#Receipts-add");
// x.dataset.target="#customer-add";
// document.querySelector('#customer-add').setAttribute('style',"display:block");


}else{

document.querySelector('#Receiptsselector').setAttribute('data-target',"#other_Receipts-add");

}

}








function show(){

let status1=document.querySelector('.status');
let status2=document.querySelector('#status');
let Booked_Clients=document.querySelectorAll('.Booked_Clients');



if((status1.value =='Booked_Clients' |  status2.value =='Booked_Clients')){
Booked_Clients.forEach((item) => {
                      item.style.display='block';

                });



}else{

Booked_Clients.forEach((item) => {
                      item.style.display='none';

                });

}


}



function showsalesreps(){

let Client_source=document.querySelector('#Client_source').value;

if(Client_source =='representative'){




document.querySelector('.selesRepes').style.display='block';

}else{

document.querySelector('.selesRepes').style.display='none';

}

}



function ChangeReceipt_holders(){

let Receipt_holders=document.querySelector('#Receipt_holders');


if(Receipt_holders.value =='NewReceipt_holders'){


document.querySelector('#Receipt_holdersinput').style.display='block';
document.querySelector("#Receipt_holders_No").removeAttribute("disabled","");
document.querySelector("#Receipt_holders_Name").removeAttribute("disabled","");


 }else{

document.querySelector('#Receipt_holdersinput').style.display='none';
document.querySelector("#Receipt_holders_No").setAttribute("disabled","disabled");
document.querySelector("#Receipt_holders_Name").setAttribute("disabled","disabled");
 }


}


function Receiptspaymentmethod(){

let paymentmethods=document.querySelectorAll('.Receipts_payment_method');
let cashpaymentmethods=document.querySelectorAll('.cashpaymentmethod');
let Bankpaymentmethods=document.querySelectorAll('.Bankpaymentmethod');
let cashvia=document.querySelectorAll('.cashvia');
let bankvia=document.querySelectorAll('.bankvia');
//fname=document.form1.txtfname.value;


if (paymentmethods.length) {


paymentmethods.forEach((paymentmethod) => {

if(paymentmethod.value =='Cash'){

document.querySelector('#paymentmethod').setAttribute('style','block');

 cashvia.forEach((cashviaitem) => {
                      cashviaitem.name='via';

                });

bankvia.forEach((bankviaitem) => {
                      bankviaitem.name='';

                });

    cashpaymentmethods.forEach((cashpaymentmethod) => {
                      cashpaymentmethod.style.display='block';

                });


Bankpaymentmethods.forEach((Bankpaymentmethod) => {
                      Bankpaymentmethod.style.display='none';
                });

}else if( paymentmethod.value =='Bank'){

document.querySelector('#paymentmethod').setAttribute('style','block');


     cashvia.forEach((cashviaitem) => {
                      cashviaitem.name='';

                });

bankvia.forEach((bankviaitem) => {
                      bankviaitem.name='via';

                });

cashpaymentmethods.forEach((cashpaymentmethod) => {
                      cashpaymentmethod.style.display='none';
                });


Bankpaymentmethods.forEach((Bankpaymentmethod) => {
                      Bankpaymentmethod.style.display='block';
                });
            }


});}}



const selectEl =document.querySelectorAll('.ourclient');
const seenValues  = new Set();


 if (selectEl.length) {
        selectEl.forEach((selectElementall) => {

                           selectElementall.addEventListener('click', (e) => {


  selectElementall.querySelectorAll('option').forEach(option => {
    if (seenValues.has(option.id)) {

      option.remove();



    }
      seenValues.add(option.id);


  });



        },{once:true});


 });
        }



function changecustomer(){

const selectEl =document.querySelector('#ourclient');
const option=selectEl.options[selectEl.selectedIndex];
let optionvalue =option.dataset.name;

if( optionvalue   == 'Group_Client'){

document.querySelector("#Receiptsform").setAttribute("action","/admin/Dashboard/CGReceipts#Receipts");


}else{



document.querySelector("#Receiptsform").setAttribute("action","/admin/Dashboard/Receipts#Receipts");



}



}









  const  TabelEL =document.querySelector('#example1');
  const TabelseenValues  = new Set();

  TabelEL.querySelectorAll('tr').forEach(tr => {
      if (TabelseenValues.has(tr.id)) {
      tr.remove();
      }
  TabelseenValues.add(tr.id);
 });





    const links = document.querySelectorAll('.nav-item  .nav-link');

    if (links.length) {
        links.forEach((link) => {
            link.addEventListener('click', (e) => {
                links.forEach((link) => {
                    link.classList.remove('active');
                });
                // e.preventDefault();
                link.classList.add('active');
            });
        });
    }









    function goback() {
        window.history.go(-1);
    }



    function gonext() {
        window.history.go(+1);
    }



    const reloadtButton = document.querySelector("#reload");
    // Reload everything:
    function reload() {
        reload = location.reload();

        Swal.fire({

  title: "update  sent  succefuly!",

  text: "تم أنشاء/ تحديث بيانات بنجاح!",

  icon: "success"

});

    }
    // Event listeners for reload
    reloadButton.addEventListener("click", reload, false);




