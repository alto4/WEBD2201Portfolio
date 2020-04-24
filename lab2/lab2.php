<?php 
		$title = "Lab 2: HTML Tables";
		$file = "lab2.php";
		$description = "Lab #2 is captured in this page, and demonstrates the use of HTML tables.";
		$date = "February 17, 2020";
		$banner = "Lab #2: HTML Tables";	
		include '../header.php';
?>
			
			<!--Main Section-->
			<div class="container">
    		<!--Part 1: Tags Table-->
				<table border="1"> 
					<caption><b>HTML Table Tags</b></caption>
					<tr>
						<th>Tag</th>
						<th>Function</th>
					</tr>
					<tr>
						<td>&lt;table&gt;</td>
						<td>To create a new table that will be organized as cells that are grouped by rows and columns.</td>
					</tr>
					<tr>
						<td>&lt;tr&gt;</td>
						<td>To create a new table row where cells of data will be entered.</td>
					</tr>
					<tr>
						<td>&lt;th&gt;</td>
						<td>To create a row that will be displayed in bold and indicate what each column is refering to within a table.</td>
					</tr>
					<tr>
						<td>&lt;td&gt;</td>
						<td>To create cells containing information within a designated row.</td>
					</tr>
					<tr>
						<td>&lt;caption&gt;</td>
						<td>To create a title for the table, which needs to be placed right after the opening &lt;table&gt; tag.</td>
					</tr>		
				</table>
				<hr/>
				
				<!--Part 2: Books Table-->
				<table border="1" id="books">
					<caption style="padding: 1em;"><b>Three Favourite Books</b></caption>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Year of Publication</th>
						<th>Description</th>						
					</tr>
					<tr>
						<td>Down and Out in Paris and London</td>
						<td>George Orwell</td>
						<td>1933</td>
						<td>A two-part novel capturing the joys and hardships of poverty and working as a poor dishwasher in two cities during the Great Depression. </td>
					</tr>
					<tr>
						<td>Odd Thomas</td>
						<td>Dean Koontz</td>
						<td>2003</td>
						<td>The odd story of a man who can see ghosts that lead him to solve various mysteries.</td>
					</tr>
					<tr>
						<td>The Last Juror</td>
						<td>John Grisham</td>
						<td>1981</td>
						<td>A thrilling story about a young man who takes over a bankrupt newspaper and gains the trust of and loathing of the members of Ford County by accurately documenting a legal trial that showcases institutional racism in Southern Mississippi during the 1970s.</td>
					</tr>
				</table>
				<hr />
				
				<!--Part 3: Class Schedule Table-->
				<table border="1" id="schedule">
					<caption><b>Winter 2020 Semester Schedule</b></caption>
					<tr>
						<td></td>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
					</tr>
					<tr>	
						<td>8:10am-<br />9:00am</td>
						<td rowspan="2" class="course">Web Development Fundamentals</td>
						<td rowspan="2" class="course">Object-Oriented Programming I</td>
						<td rowspan="2" class="course">Web Development Fundamentals</td>
						<td rowspan="2" class="course">LINUX I</td>
						<td rowspan="2" class="course">LINUX I</td>
					</tr>
					<tr>	
						<td>9:10am-10:00am</td>					
					</tr>
					<tr>	
						<td>10:10am-11:00am</td>
						<td class="lunch">Lunch</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>	
						<td>11:10am-12:00pm</td>
						<td rowspan="3" class="course">Systems Development I</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>	
						<td>12:10pm-1:00pm</td>
						<td colspan="4" class="lunch">Lunch</td>					
					</tr>
					<tr>	
						<td>1:10pm-2:00pm</td>
						<td></td>
						<td></td>
						<td></td>
						<td rowspan="2" class="course">Object-Oriented Programming I</td>
					</tr>
					<tr>	
						<td>2:10pm-3:00pm</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>	
						<td>3:10pm-4:00pm</td>
						<td></td>
						<td></td>
						<td rowspan="3" class="course">.NET Development I</td>
						<td></td>
						<td></td>
					</tr>
					<tr>	
						<td>4:10pm-5:00pm</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>	
						<td>5:10pm-6:00pm</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<hr style="margin: 2rem 0;"/>

            </div>
		<?php include '../footer.php'; ?>