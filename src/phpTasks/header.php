<style>
    html, body {
    height: 100%;     
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f1e9e9;
}

body {
    display: flex;
    flex-direction: column;  
    min-height: 100vh;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;    
}

.logo {
    font-size: 28px;
    font-weight: 500;
    letter-spacing: 2px;
}

nav a {
    color: white;
    text-decoration: none;
    margin-left: 15px;
    padding: 8px 14px;
    border: 1px solid white;
    border-radius: 4px;
    font-size: 14px;
    transition: 0.3s;
}

nav a:hover {
    background-color: white;
    color: #333;
}

main {
    flex: 1;          
    padding: 20px;

}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    width: 100%; 
    padding: 20px;   
}
</style>


    <header>
        <div class="logo">Website Programming</div>
        <nav>
            <a href="home.php"> Home</a>
            <a href="ex1.php">Ex1</a>
            <a href="ex2.php">Ex2</a>
            <a href="ex3.php">Ex3</a>
            <a href="ex4.php">Ex4</a>
            <a href="ex5.php">Ex5</a>
            <a href="ex6.php">Ex6</a>
            <a href="ex7.php">Ex7</a>
        </nav>
    </header>
