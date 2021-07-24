class employee{
    constructor(name1,age1,code1){
        this._name1 = name1;
        this.$age1 = age1;
        this.code1 = code1;
    }
    static intro1(){
        return "<b style='font-size:50px'>Hello</b> ";
    }
    static intro1_2(para1){
        return "Good morning <br>"+"<b style='color:black;padding-left:70px'>"+para1._name1+"</b>";
    }

    intro2(){
        return "<b style='padding-left:55px;color:yellow'>4 employees: </b>"+"<br>"+"<b style='padding-left:40px'>"+this._name1+"</b>"+`
        <div>
          
          <br>
          <br>
        <span>
              <p style='padding-left:20px;border-top:4px dotted purple'> Employee 1: ${this._name1[0]}.</p><br>
              <p style='padding-left:20px'> He is ${this.$age1.John} years old</p>
         </span>


         <br>
         
         <span>
              <p style='padding-left:20px;border-top:4px dotted orange'> Employee 2: ${this._name1[1]}.</p><br>
              <p style='padding-left:20px'> He is ${this.$age1.Christ} years old</p>
        </span>

         <br>
         
         <span>
              <p style='padding-left:20px;border-top:4px dotted blue'> Employee 3: ${this._name1[2]}.</p><br>
              <p style='padding-left:20px'> She is ${this.$age1.Hana} years old</p>
        </span>


         <br>
         
         <span>
              <p style='padding-left:20px;border-top:4px dotted green'> Employee 4: ${this._name1[3]}.</p><br>
              <p style='padding-left:20px'> She is ${this.$age1.Jane} years old</p>
        </span>


         </div>
        ` }

    

    get _code1(){
        return this.code1;
    }
    set _code1(new_code1){
        this.code1 = new_code1;
    }
}


const employee_obj = new employee(["John","Christ","Hana","Jane"],{
    John:36,
    Christ:42,
    Hana:32,
    Jane:29
},
 "X3N6G8K3I5E7"
);


employee_obj._code1 = "<span><br> <b style='padding-left:130px;color:purple'>X3N6G8K3I5E7</b> <br> <b style='padding-left:130px;color:orange'>X3N6G8K3I5E2</b> <br> <b style='padding-left:130px;color:blue'>X3N6G8K3I5E5</b> <br> <b style='padding-left:130px;color:green'>X3N6G8K3I5E9</b> </span>";

console.log(employee.intro1());
document.getElementById("welcome_text").innerHTML = employee.intro1();




console.log(employee.intro1_2(employee_obj));
document.getElementById("welcome_text2").innerHTML = employee.intro1_2(employee_obj);


console.log("\n TODAY WE CELEBRATE SOME OF OUR EMPLOYEE THAT REWARD A NEW SALARY THIS MONTH \n");
document.getElementById("welcome_text3").innerHTML = "<br> <b style='padding-left:30px;padding-right:30px'> TODAY WE CELEBRATE SOME EMPLOYEES </b> <br><b style='padding-left:30px;padding-right:30px'>THAT REWARD A NEW SALARY THIS MONTH</b> <br>";


console.log("Our employee codes are : " +employee_obj._code1 +"\n");
document.getElementById("welcome_text4").innerHTML =  "<span style='padding-left:80px'>Our employee codes are : " +employee_obj._code1 +"</span><br>";



console.log(employee_obj.intro2());
document.getElementById("welcome_text5").innerHTML =  employee_obj.intro2();






class salary extends employee{
    constructor(name1,age1,salary){
        super(name1,age1)
        this.salary = salary
        
    }
    intro3(){
        return "Employee named: "+this._name1 + ".He is "+this.$age1+" years old." +`He earned
        ${this.salary} dollar this month two days ago`; 
    }
    intro4(job_position){
        return "Employee named: "+this._name1 + ".She is "+this.$age1+" years old." +`She earned
        ${this.salary} dollar this month two days ago . She is the best ${job_position} of our company`; 
    }
    intro5(job_position){
        return "Employee named: "+this._name1 + ".He is "+this.$age1+" years old." +`He earned
        ${this.salary} dollar this month two days ago . He is the best ${job_position} of our company`; 
    }
}
const salary_obj = new salary("John",36,"$20000");
const salary_obj2 = new salary("Christ",42,"$30000");
const salary_obj3 = new salary("Hana",32,"$25000");
const salary_obj4 = new salary("Jane",29,"$18000");





console.log("Here is the reward chart: \n")




console.log("Employee name: " +salary_obj._name1);
document.getElementById("john_reward_name").innerHTML = "Employee name: " +salary_obj._name1;
document.getElementById("john_modal_reward_name").innerHTML = "Employee name: " +salary_obj._name1;


console.log("Employee_age:" + salary_obj.$age1);
document.getElementById("john_reward_age").innerHTML = "Employee_age:" + salary_obj.$age1;
document.getElementById("john_modal_reward_age").innerHTML = "Employee_age:" + salary_obj.$age1;


console.log(salary_obj.intro5("Financial Accountant"));
document.getElementById("john_reward_get").innerHTML = salary_obj.intro5("Financial Accountant");
document.getElementById("john_modal_reward_get").innerHTML = salary_obj.intro5("Financial Accountant");



let employee_obj2 = {
   _name1: "Chris",
   $age1: 42,
   salary:"$30000"
}

let employee_obj3 = {
   _name1: "Hana",
   $age1: 32,
   salary:"$25000"
}

let employee_obj4 = {
   _name1: "Jane",
   $age1: 29,
   salary:"$18000"
}
console.log("\n \n")



console.log("Employee name: " +salary_obj2._name1);
document.getElementById("chris_reward_name").innerHTML = "Employee name: " +salary_obj2._name1;
document.getElementById("chris_modal_reward_name").innerHTML = "Employee name: " +salary_obj2._name1;


console.log("Employee_age:" + salary_obj2.$age1);
document.getElementById("chris_reward_age").innerHTML = "Employee_age:" + salary_obj2.$age1;
document.getElementById("chris_modal_reward_age").innerHTML = "Employee_age:" + salary_obj2.$age1;

console.log(salary_obj.intro5.call(employee_obj2,"Web Develop Engineer"));
document.getElementById("chris_reward_get").innerHTML = salary_obj.intro5.call(employee_obj2,"Web Develop Engineer");
document.getElementById("chris_modal_reward_get").innerHTML = salary_obj.intro5.call(employee_obj2,"Web Develop Engineer");



console.log("\n \n")

console.log("Employee name: " +salary_obj3._name1);
document.getElementById("hana_reward_name").innerHTML = "Employee name: " +salary_obj3._name1;
document.getElementById("hana_modal_reward_name").innerHTML = "Employee name: " +salary_obj3._name1;


console.log("Employee_age:" + salary_obj3.$age1);
document.getElementById("hana_reward_age").innerHTML = "Employee_age:" + salary_obj3.$age1;
document.getElementById("hana_modal_reward_age").innerHTML = "Employee_age:" + salary_obj3.$age1;


console.log(salary_obj.intro4.apply(employee_obj3,["Graphic Designer"]));
document.getElementById("hana_reward_get").innerHTML = salary_obj.intro4.apply(employee_obj3,["Graphic Designer"]);
document.getElementById("hana_modal_reward_get").innerHTML = salary_obj.intro4.apply(employee_obj3,["Graphic Designer"]);





console.log("\n \n")

console.log("Employee name: " +salary_obj4._name1);
document.getElementById("jean_reward_name").innerHTML = "Employee name: " +salary_obj4._name1;
document.getElementById("jean_modal_reward_name").innerHTML = "Employee name: " +salary_obj4._name1;


console.log("Employee_age:" + salary_obj4.$age1);
document.getElementById("jean_reward_age").innerHTML = "Employee_age:" + salary_obj4.$age1;
document.getElementById("jean_modal_reward_age").innerHTML = "Employee_age:" + salary_obj4.$age1;

console.log(salary_obj.intro4.apply(employee_obj4,["Marketing Exercutive"]));
document.getElementById("jean_reward_get").innerHTML = salary_obj.intro4.apply(employee_obj4,["Marketing Exercutive"]);
document.getElementById("jean_modal_reward_get").innerHTML = salary_obj.intro4.apply(employee_obj4,["Marketing Exercutive"]);




