export class myUser{
    name;
    age;

    constructor(nam="Bernard", ag=42){
        if((typeof nam)=='string' && (typeof ag)=='number' && nam!='' && ag>0){
            this.name=nam;
            this.age=ag;
            }
        else{
            console.log ("Please give the User a Name and an Age");
        }
    }

    static printMe(user){
        if((typeof user)=='object' && user.name!='' && user.age>0){
        console.log("Hello, my name is "+user.name+" and I am "+user.age+" years old.");
    }
    else{
        console.log("This thing is not a User!");
    }
}

}
