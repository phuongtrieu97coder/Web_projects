var lamborghini_veneno_info_obj = {
    _source:"Wikipedia+lamborghini.com",

    _model:"Lamborghini Veneno 22",
    _type:"Sports Car",
    _condition:["old","new"],
    _year: [
        "2022","2021","2020","2019",
        "2018","2017","2016","2015",
        "2014","2013","2012","2011",
        "2010","2009","2008","2007"    
        ],

    _speed:"221 m/h | 355 km/h",

    _price:["$8,270,000","","",""],
    _image_src:[
        "/web_develop_project/TGH_Car_Dealership/image/lamborghini_veneno.jpg"
    ],
    _color:["#bfbfbf","#009933","#ff3300","#cc6600","#3399ff","#6600cc","#000000"],

    _max_power: "750 CV (552 kW) @ 8.400 rpm",

    _acceleration:"0-100 KM/H (0-62 MPH) in 2.9s",

    _transmission: "Electronically controlled all-wheel drive system (Haldex gen. IV) with rear mechanical self-locking differential",
          
    _number_of_seats: "2",
    _length: "5.020 mm (197.64 in)",
    _width: "2.075 mm (81.69 in) (without mirrors). 2,265 mm (89.2 in) (with mirrors)",
    _height: "1.165 mm (45.87 in)",
    _overview:`
    The Lamborghini Veneno Roadster takes the aerodynamic efficiency of a racing prototype 
    onto everyday roads. This super sports car is characterized by optimal aerodynamics in order to 
    guarantee stability in fast curves and a behavior like a racing prototype. All of this on a car 
    devised for the road. The perfect car for sports-driving lovers.
    
    
    `,
    _design:`
    
    A masterpiece of power and lightness inspired by aeronautics
Here are the technical specifications of the new Veneno: with a 6.5 liter aspirated V12 engine
 and a top speed of 355 km/h, this Lamborghini concept car represents state-of-the-art design 
 inspired by aeronautics, capable of giving you the indescribable feeling of flying on the road.
  Faithful to the Lamborghini lines, the Veneno is characterized by extreme proportions, emerging in
   the forceful arrow-shaped front as well as alternating razor-sharp lines and sleek, tight surfaces.
    
    `,
    _body_and_chassis:{
        chasis:"Monocoque in carbon fiber",
        body:"Exteriors in carbon fiber",
        opening_roof:"Open roof with fixed roll-bar system",
        external_mirrors:"Electrically operated, heated and foldable",
        aerodynamics:"Spoiler manually adjustable with 3 position; completely panelled underbody",

    },
    _engine:{
        type:"V12, 60°, MPI (Multi Point Injection)",
        displacement:"6,498 cm³ (396.5 cu in)",
        bore_x_stroke:"95 mm x 76.4 mm (3.74 x 3.01 in)",
        compression_ratio:"11,8:1",
        max_power:"750 CV (552 kW) @ 8.400 rpm",
        max_torque:"690 Nm (507 lb.-ft.) @ 5.500 rpm",
        weight_to_power_ratio:"1,99 kg/CV (4.35 lb/CV)",
        lubrification_system:"Dry sump",
        emission_control:"Euro 6 - LEV 2"
    },
    _wheels:{
        front_rims:"20'' specific forged rims; 9J x 20 ET32.2",
        rear_rims:"21'' specific forged rims; 13J x 21 ET66.7",
        front_tires:"255/30 ZR20",
        rear_tires:"355/25 ZR21"
    },
    _steering_and_suspension:{
        control_system:"Electronic Stability Control (ABS e TCS integrati)",
        suspensions:"Push rod magneto rheologic active front and rear suspension with horizontal dampers and springs",
        suspensions_geometry:"Double wishbone fully independent suspension",
        steering_type:"Hydraulic assisted power steering",
        steering_system:"Servotronic"
    },
    _breaking_system:{
       brakes:"Carbon-ceramic brakes with fixed calipers monoblock in aluminum with 6 pistons (front) and 4 pistons (rear)",
       front_brakes:"Carbon-ceramic discs ventilated and cross drilled with 400 mm diameter and 38 mm thickness",
       rear_brakes:"Carbon-ceramic discs ventilated and cross drilled with 380 mm diameter and 38 mm thickness"
    },
    _transmission:{
        transmission:"Electronically controlled all-wheel drive system (Haldex gen. IV) with rear mechanical self-locking differential",
        gearbox:"ISR (Independent Shifting Rods) gearbox with 7 speeds"
    },
    _safety:{
        airbags:"Driver, passenger, side and kneels airgbags",
        passive_safety:"Front and rear specific collapsible areas; side protection system",
        active_safety:"Electronic Stability Control (ABS and TCS integrated)"
    },
    _dimension:{
        length:"5.020 mm (197.64 in)",
        width_excluding_mirrors:"2.075 mm (81.69 in)",
        width_including_mirrors:"2,265 mm",
        height:"1.165 mm (45.87 in)",
        wheelbase:"2.700 mm (106.30 in)",
        dry_weight:"1.490 kg (3,285 lb)",
        weight_distribution:"43 / 57"
    },
    _performance:{
        max_speed:"355 km/h (221 mph)",
        acceleration:"0-100 KM/H (0-62 MPH) in 2.9s"
    }

             
                      
                 
     
} 








class car_info_block1{
    constructor(car_model,car_code){
        this.car_model = car_model;
        this.car_code = car_code;
    }
    car_info_block1_method1(){
        return(
            <div>
                <h1>{this.car_model}</h1>
            </div>
        )
    }
}