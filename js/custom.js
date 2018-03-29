$('body').vegas({
    overlay: false,
    transition: 'fade',
    transitionDuration: 3000,
    delay: 6000,
    animation: 'random',
    animationDuration: 20000,
    timer: false,
    slides: [
        {
            src: './img/3.jpg'
        },
        {
            src: './img/2.jpg'
        },
        {
            src: './img/4.jpg'
        },
        {
            src: './img/5.jpg'
        },
        {
            src: './img/6.jpg'
        },
        {
            src: './img/1.jpg'
        }
  ]
});
/*CONNEXION */
$('#buttonConnexion').click(function () {
    $('.navbar').hide();
});

$('#connexion').on('hidden.bs.modal', function (e) {
    $('.navbar').show();
    $('.navbar').addClass('animated fadeInUp');
})

/*INSCRIPTION*/

$(function () {

    $('#login-form-link').click(function (e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function (e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    /*END CONNEXION & INSCRIPTION*/

    $("#register-form").submit(function (e) {
        if (invalid) {
            return false;
        } else {
            return true;
        }
        e.preventDefault();

    });

    $("#register-submit").click(function () {
        if (valid)
            $("#form-id").submit();
    });

});
/*Modification traitement input date*/

    $("#datetimepicker input").datepicker({
         format: "yyyy-mm-dd",       
});

/*Entrée Visiteur add rows*/
$(function () {
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='nom[]' type='text' placeholder='Nom' class='form-control input-md' /></td><td><input name='prenom[]' type='text' placeholder='Prenom' class='form-control input-md'></td><td><input name='age[]' type='number' placeholder='Age' class='form-control input-md'></td><td><div class='input-group date' id='datetimepicker"+i+"'><input type='text' class='form-control' placeholder='Date de visite' class='DateEntree' name='DateEntree[]' readonly><span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span></div></td>");
         
      $("#datetimepicker"+i+" input").datepicker({
         format: "yyyy-mm-dd",
          startDate: new Date(),
          todayBtn: true,
        });
         
      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++;
      });
    
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });
    });
/*End Add Row*/

$(function () {
      var i=1;
     $("#add_rowA").click(function(){
      $('#addr'+i).html("<td><input  name='CODEACTIVITE[]' style='text-align:center' type='text'></td><td><input  name='CODEPRIX[]' style='text-align:center' type='text' ></td><td><input  name='LIBELLEACTIVITE[]' style='text-align:center' type='text' ></td><td><div class='input-group date'id='datetimepicker"+i+"'><input  name='DATEDEBUTACTIVITE[]' style='text-align:center' type='text' ></div></td><td><div class='input-group date'id='datetimepicker"+i+"'><input  name='DATEFINACTIVITE[]' style='text-align:center' type='text' ></div></td><td><input  name='AGEMINACTIVITE[]' style='text-align:center' type='text' ></td><td><input  name='ACCES[]' style='text-align:center' type='text' ></td>");
         
      $("#datetimepicker"+i+" input").datepicker({
         format: "yyyy-mm-dd",
          startDate: new Date(),
          todayBtn: true,
        });
         
      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++;
      });
    
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });
    });

$(function () {
    var p=0;
      var i=1;
     $("#add_rowP").click(function(){p=0;
      $('#addr'+i).html("<td><center><input min='1' name='modif"+p+++"[]' style='text-align:center' type='text'></center></td><td><center><input min='1' name='modif"+p+++"[]' style='text-align:center' type='text'></center></td><td><center><input min='1' name='modif"+p+++"[]' style='text-align:center' type='text'></center></td><td><center><input min='1' name='modif"+p+++"[]' style='text-align:center' type='text'></center></td> ");
       
         $("#datetimepicker"+i+" input").datepicker({
         format: "yyyy-mm-dd",
          startDate: new Date(),
          todayBtn: true,
        });
         
      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++;
      });
    
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });
        });