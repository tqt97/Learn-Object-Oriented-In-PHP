# Summary Chapter 1

<hr>

<details close>
<summary>1. Creating Classes</summary>
The first thing we're going to need to know is where do objects come from and how do we create them?

We're going to need something called a Class. This is basically a plan for how your object should be created. Think of the class as PHP's construction manual for the object.

We create the classes and PHP uses those classes to create the objects.
</details>

<details close>
<summary>2. Class Properties</summary>
Properties are variables which are defined in the class but belong to the object. You need to create an object in order to access them.

It makes sense for certain properties to belong to an object. In this example we'll give our product object a name and a price.
</details>

<details close>
<summary>3. Class Methods</summary>
We now know how to give data to an object using properties so let's learn how to make it do stuff.

We can use 'methods' to add functionality to the object. What is a method? It is simply a function which gets defined within the class. These methods then belong to the object and only the object will be able to call them.
</details>

<details close>
<summary>4. Method Arguments</summary>
So far so good! You now know 3 of the things that you'll spend most of your time doing in OOPHP i.e. writing classes, properties, and methods. I told you this would be easy...let's keep going!

You can pass variables into methods just like regular functions. We refer to these variables as parameters when we define them in classes and as arguments when they are passed to physical objects but...

...most of the time, developers will just refer to them as arguments regardless of whether they are working with a classes or objects, self included!
</details>

<details close>
<summary>5. Named Arguments</summary>
Named arguments were an awesome addition in PHP version 8 but it's taking PHP devs a while to get used to them and see their true potential. I've also programmed with Python so I'm totally aware of the stuff that you can do with these and I love em!

Let's have a look at what they are and what the benefits are and don't be afraid to let me know what you think of them!
</details>

<details close>
<summary>6. Constructors</summary>
Constructors are a special kind of method. They are called 'behind-the-scenes' when an object is created.

That means that we don't have to write the code that calls them as PHP does the work for us.

Cheers PHP 👊
</details>

<details close>
<summary>7. Constructor Promoted Properties</summary>
Previously in PHP we would have to define properties, then constructor params, and then assign the params to the properties...so that's 3 different places you'd have to write code 😭

Promoted properties streamline the way in which you can set property values in the constructor so that those three code locations are reduced to one 🦾

You will need PHP8 + in order to use them.
</details>

<details close>
<summary>8. Type Hinting</summary>
Type declarations enable you to keep your code consistent and predictable. But not only that, they will also reduce the amount of code that you need to write because you no longer will need to check that your arguments are of the right type.

PHP will also throw an error on our behalf if the wrong type is passed. Type hints are a good thing and you should use them.
</details>

<details close>
<summary>9. Class Type Declarations</summary>
Class type declaration prevent your methods from receiving the wrong type of objects. This allows any wrong types to be identified without you having to write additional checks in your code.
</details>

<details close>
<summary>10. Return Type Declarations</summary>
Type-hinted returns enable your client code to know what types to expect from invoked methods. Again, we're making our code predictable and reliable...and everyone likes developers that write predictable, reliable code🏅

So here we are at the end of chapter one already...doesn't time fly! I hope you're enjoying the course so far. In the next chapter we're going to start looking at some object oriented priciples like inheritance and encapsulation...as well as a load of other cool stuff.

Lets do this! 💪
</details>
