//Creating a constructor

function person(first, last, age, gender, interests)
{
	this.name={
		first: first,
	    last: last
	};
	


this.age = age;
this.gender = gender;
this.interests = interests;
this.bio = function()
{
	alert(this.name.first + '' + this.name.last + 'is' + this.age+'years old. He likes'+ this.interests[0] + 'and' + this.interests[1] +'.');
};

this.greeting = function()
{
	alert("Hello my name is " + this.name.first+'.');
}

}

//creating an object

const person1= new person('John', 'Doe', 30, 'male', ['reading', 'swimming']);
const person2=new person