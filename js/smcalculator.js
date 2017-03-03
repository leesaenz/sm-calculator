$('document').ready(function() {
	//Implementing Bootstrap TouchSpin plugin
	$(".calc input").TouchSpin({
     verticalbuttons: true,
     min:0,
     max:10000
   });

	$('#teachers').val(1);
	$('#total').val('$'+399);

	if($('#teachers').val() <= 1) {
		$('#teachers').val(1);
		$('.teacher-down').attr('disabled','disabled');
	} else {
		$('.teacher-down').removeAttr('disabled');
	}
});

 function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }

$('#teachers,#students,#upgrades').change(function () {
 
  //Zeroing out sum variable for each calculation
	var sum = 0;

	var teach = $('#teachers');
	var student = $('#students');
	var upgrade = $('#upgrades');

	//Capturing values of #students and #upgrades in order to limit number of upgrades based on number of students
	var teachers = Number(teach.val());
	var students = Number(student.val());
	var upgrades = Number(upgrade.val());

	//Cost constants
	var studentCost = Number(20);
	var bulkStudentCost = Number(40);
	var teacherCost = Number(40);
	var smartMusicCost = Number(399);

	//Restricting max input value of #upgrades based on value of #students
	if (upgrades >= students) {
		upgrade.val(students);
		//Disabling up arrow button for visual feedback
		$('.upgrade-up').attr('disabled','disabled');
	} else {
		//Enabling the up arrow button once this argument is not true
		$('.upgrade-up').removeAttr('disabled');
	}

	//If there are less than 4 teachers, the teacher cost is 0, after that, it's $40 a teacher
	if(teachers < 4) {
		teacherCost = 0;
	}

	//If number of teachers is less than or equal to 1, we set the value back to a minimum of 1 and disable the down arrow for visual feedback
	if(teachers <= 1) {
		teach.val(1);
		$('.teacher-down').attr('disabled','disabled');
	} else {
		//If not, the down arrow is enabled to allow the user to get back to 1 minimum.
		$('.teacher-down').removeAttr('disabled');
	}

	//Calculating cost to display in the total box

	//Number of teachers minus 3(since the first three teachers are free) times the teacher cost of $40 per teacher
  var teacherSum = Number((teachers - 3) * teacherCost);
  //Number of student upgrades times the upgrade cost
  var upgradeSum = Number(upgrades * studentCost);

  var studentSum = 0;

  var studentSlots = (students - 50 - upgrades);

  //If there are more than 50 students, we need to add a $40 cost in increments of 5 students after 50
	if(studentSlots > 0.5) {
		studentSum = (Math.floor(((studentSlots) / 5) - 0.001) + 1) * 40;
	} else if (studentSlots < 0.5) {
		studentSum = 0;
  }

	sum = Number(teacherSum + upgradeSum + studentSum + smartMusicCost);

	// Set the computed value to 'total' textbox new value
	$('#total').val('$'+commaSeparateNumber(sum));

});
