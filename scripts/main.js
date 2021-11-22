
    async function fetchAndDisplay(){
        let f = await fetch('test.css')
        let t = await f.text()
        // alert(t)
        // document.getElementById('hello').textContent = t
        console.log(t)
        alert(JSON.stringify(t))
    }


    function Person(name,age){
        this.name=name;
        this.age=age;
    }

    Person.prototype = {
        getOlder : function () {
        this.age++;}
    }

    function Student(){
        Student.prototype = new Person()
    }

    class Animal{
        constructor(name){
            this.name = name
        }

        makeSound(){
            console.log("!!!")
        }
    }

    class dog extends Animal{

    }

    document.getElementById("fix").addEventListener('click',function () {
        document.getElementById('hello').style.animation = 'none'
        let special = document.getElementsByClassName('special')
        for(let s of special){
            s.style.fontsize = '25pt'
        }
        let p = new Person("bob",99)
        console.log(p.name)
        p.getOlder()
        console.log(p.age)
        console.log(new Animal(n))
        n.makeSound()
    })



    document.getElementById('colourChangeButton').addEventListener('click',function () {
    document.body.backgroundColor = document.getElementById('new_colour').value
    let ol = document.getElementById('actions')
    let il = document.createElement('li')
    ol.appendChild(li)
    });

    function  createLI(text){
        let li = document.createElement('li')
        li.textContent = text
        return li
    }
