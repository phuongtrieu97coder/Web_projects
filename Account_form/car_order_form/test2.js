class car_collection {
    constructor(car_name,car_price){
        this.car_name = car_name;
        this.car_price = car_price;
    }
}

const  car_collection_obj = new car_collection(
    ["McLaren Speedtail","Ferrari Laferrari Perta",
    "Bugatti Chiron Pur Sport","Pagani Huayra Bc Roadster",
    "Lamborghini Sian","Lamborghini Veneno",
    "Bugatti La Voiture Noire"],


    ["$2.2 million","$2.2 million",
    "$3.3 million","$3.5 million",
    "$3.6 million","$4.5 milion",
    "$12.5 million"]
);

Object.defineProperties(car_collection_obj,{
   car_name:{
       value: ["McLaren Speedtail","Ferrari Laferrari Perta",
       "Bugatti Chiron Pur Sport","Pagani Huayra Bc Roadster",
       "Lamborghini Sian","Lamborghini Veneno",
       "Bugatti La Voiture Noire"],
        enumerable:true,
        configurable:false,
        writable:false
    },
    car_price:{
        value:["$2.2 million","$2.2 million",
        "$3.3 million","$3.5 million",
        "$3.6 million","$4.5 milion",
        "$12.5 million"],
        enumerable:true,
        configurable:true,
        writable:false
    }
   
});

class car_collection2 extends car_collection{
    constructor(car_name,car_price,car_id){
        super(car_name,car_price);
        this.car_id = car_id;
    }
}

const car_collection2_obj = new car_collection2();

car_collection2_obj.car_id = ["21454764654647657","21454764654647658",
"21454764654647659","214547646546476510","214547646546476511",
"214547646546476512","214547646546476513"];



var symbol1 = Symbol("caras38986562tw124");
var symbol2 = Symbol.for("carvhtn46756hi87i");

car_collection_obj[symbol1] = "localSymbol";
car_collection_obj[symbol2] = "globalSymbol";


var get_car_name = document.getElementById("car_name_intro").innerHTML;


if(get_car_name == car_collection_obj.car_name[0]){
        document.getElementById("car_img_item").src = "image/car/mclarenspeedtail.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[0];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[0];
    } 
  else if(get_car_name == car_collection_obj.car_name[1]){
        document.getElementById("car_img_item").src = "image/car/ferrari_laFerrari_Aperta.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[1];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[1];
    } 
  else if(get_car_name == car_collection_obj.car_name[2]){
        document.getElementById("car_img_item").src = "image/car/bugatti_chiron_pur_sport.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[2];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[2];
    } 
  else if(get_car_name == car_collection_obj.car_name[3]){
        document.getElementById("car_img_item").src = "image/car/2020_Pagani_Huayra_Roadster_BC.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[3];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[3];
    } 
  else if(get_car_name == car_collection_obj.car_name[4]){
        document.getElementById("car_img_item").src = "image/car/lamborghini_sian.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[4];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[4];
    } 
  else if(get_car_name == car_collection_obj.car_name[5]){
        document.getElementById("car_img_item").src = "image/car/lamborghini_veneno.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[5];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[5];
    } 
  else if(get_car_name == car_collection_obj.car_name[6]){
        document.getElementById("car_img_item").src = "image/car/bugattilavoiturenoire.jpg";
        document.getElementById("car_price_intro").innerHTML = car_collection_obj.car_price[6];
        document.getElementById("order_code").innerHTML = car_collection2_obj.car_id[6];
    } else {
        document.getElementById("car_img_item").src = "image/car/car_icon.png";
        document.getElementById("car_name_intro").innerHTML = "CAR NAME";
        document.getElementById("car_price_intro").innerHTML = "CAR PRICE"; 
}
