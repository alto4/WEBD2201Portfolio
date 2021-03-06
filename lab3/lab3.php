<?php 
		$title = "Lab 3: Formatting and Layout With Styles";
		$file = "lab3.php";
		$description = "Lab #3 is captured in this page, and demonstrates the use of HTML tables.";
		$date = "February 17, 2020";
		$banner = "Lab #3: Formatting and Layout with Styles";	
		include '../header.php';
?>
			
			<!--Main Section-->
			<div class="container">
                <p>
                    Please find descriptions of the various selectors used throughout the stylesheet developed for 
                    Lab #3, as detailed below. Although most of these are very basic, I had a lot of fun playing with the styling
                    of each page and learned quite a bit by playing with different selectors and styling attributes.
                </p>
                <hr />
                <p>
                    The body selector was used to create the basic color scheme for my pages, and I decided to use green as the background
                    color, as it is my favourite color, as well as a black Asap font imported from Google Fonts. <br /> <br />
                body {<br />
                        background-color: green;<br />
                        font-family: Asap, Lato, sans-serif;<br />
                        font-size: 19px;<br />
                        color: #000;<br />
                    } <br />
                </p>
                <hr />
                <p>
                    I created a container class using the div element to center content on the page and give some empty space on each side of the main content.
                    I also used a border and slightly darker shade of green to provide a bit of separation from this blank space, and the border-radius property to create 
                    rounded corners. <br /><br />
                    .container {<br />
                        background-color: darkgreen;<br />
                        margin: 0 15%;<br />
                        padding: 0 5%;<br />
                        border: 1px solid #000;<br />
                        border-radius: 10px;<br />
                    }<br />
                </p>
                <hr /> 
                <p>
                    To place emphasis on the title of each page, I created a title class that enlarged the text, and also used a thick dashed border for variety.<br /><br />
                    .title {<br />
                        font-size: 34px; <br />
                        text-align: center; <br />
                        margin: 0.5em auto;<br /> 
                        padding: .5em;<br />
                        border: 5px dashed #000;<br />
                        width: 50%;<br />
                    }<br />
                </p>
                <hr />
                <p>
                    A variety of pseudo-selector were placed on the a tags used through this page to represent different statuses, such as active, visited, and hover states
                    of each. <br /><br />                    
                    a:link {<br /> 
                        color: purple;<br /> 
                    }<br /> <br /> 
                    a:active {<br /> 
                        text-decoration: underline;<br /> 
                        background-color: blue;<br /> 
                    }<br /> <br /> 
                    a:visited {<br /> 
                        color: #222;<br /> 
                    }<br /> <br /> 
                    a:hover {<br /> 
                        color: black;<br /> 
                        text-decoration: underline;<br /> 
                    }<br /> <br />                     
                </p>
                <hr />
                <p>
                    For the pages navigation, I used the flexbox display type to easily center different navigation links, which I find much easier for working with the layout. I also removed the 
                    list-style-type to remove the bullet points that appear by default on list items, as well as increased the font-size.<br /><br />
                    .navbar {<br />
                        display: flex;<br />
                        justify-content: center;<br />
                        list-style-type: none; <br />
                        font-size: 26px;<br />
                    }<br /><br />
                </p>
                <hr />
                <p>
                    For the navigation links, I spent quite a bit of time playing around with the margin, color scheme, and border properties. I decided on a purple background color, as well as white text to 
                    provide contrast, as a well as a thick border and padding to make the navigation links larger. The border-radius property was also adjust to create rounded corners. I added hover pseudo-selectors 
                    to make things a little more dynamic, as I had with the other links, but using different properties so the navigaiton buttons would clearly show when they were being hovered upon. A current class was
                    also used to make it clear to the user what page they are currently on.<br /><br />
                    .navbar li a {<br />
                        color: #fff;<br />
                        background-color: purple;<br />
                        padding: .3rem .5rem;<br />
                        border: 3px solid #000;<br />
                        border-radius: 8px;<br />
                        margin: 0 1rem;<br />
                        text-decoration: none;<br />
                    }<br /><br />                    
                    .navbar li a:hover {<br />
                        background-color: darkgreen;<br />
                        text-decoration: underline;<br />
                    }<br /><br />                    
                    .navbar .current {<br />
                        text-decoration: underline;<br />
                        background-color: blue;<br />
                    }<br /><br />                 
                </p>
                <hr /> 
                <p>
                    On the hompage, I used an id to style the welcome paragraph and made set the max-width to keep everything close to the center of 
                    the container, on top the image. I also made the font-size slightly larger as I wanted to make this paragraph stand out. <br /><br />
                    #welcome {<br />
                        text-align: center;<br />
                    }<br /><br />
                    #welcome p {<br />
                        font-size: 20px;<br />
                        max-width: 750px;<br />
                        text-align: center;<br />
                        margin: 1rem auto;<br />
                    }<br /><br />
                </p>
                <hr />
                <p>
                    The caption elements on my Lab #2 page were styled to provide a bit more emphasis, using a greater font-size and font-weight, and also by underlining the title. <br /><br />
                    caption {<br />
                        font-size: 20px;<br />
                        font-weight: 700;<br />
                        text-decoration: underline;<br />
                        margin: 1em;<br />
                    }<br /><br />
                </p>
                <hr />
                <p>
                    For the table element I didn't change very much, aside from adding a border around each tables' contents.<br /><br />
                    table {<br />
                        margin: auto; <br />
                        width: 60%; <br />
                        margin-bottom: 2em;<br />
                        border: 2px solid #000;<br />
                    }<br /><br />
                </p>
                <hr />
                <p>
                    For the table headings, I added underlines and increased the font-size to provide emphasis on each column heading. <br /><br />
                    th {<br />
                        padding: 1em;<br />
                        text-decoration: underline;<br />
                        font-size: 24px;<br />
                    }<br /><br />
                </p>
                <hr />
                <p>
                    For two of the tables used in Lab #2, I changed the width's to conform with the layout shown in the lab requirements. I added an id for each table 
                    to alter the width's they take up within their container, and also used classes to style related events with corresponding colors (i.e. Lunch, classes, etc.). <br /><br />      
                    #books {<br />
                        width: 70%; <br />
                        margin: auto; <br />
                        margin-bottom: 2em;<br />
                    }<br /><br />

                    #schedule {<br />
                        width: 90%;<br /> 
                        text-align: center;<br /> 
                        margin-bottom: 2em;<br />
                    }<br /><br />
                    .course {<br />
                        background-color: green;<br />
                    }<br /><br />
                    
                    .lunch {<br />
                        background-color: rgb(47, 47, 207);<br />
                    }<br /><br />
                    
                </p>
                <hr />
                <p>
                    For each page's footer, I used a class to push everything to the page's right side, and also to control the size of each validation image.<br /><br />
                    .footer {<br />
                        text-align: right;<br />
                        margin: 1rem;<br />
                    }<br /><br />
                    
                    .footer span {<br />
                        color: white; <br />
                        font-weight:bold; <br />
                        padding: 1rem;<br />
                    }<br /><br />
                    
                    .footer img {<br />
                        width:88px;<br />
                        height:31px;<br />
                    }<br /><br />
                </p>
            </div>            
                            
			<?php include '../footer.php'; ?>