#Framework
A Project by Dylan Dixon, Håkon Underbakke, Adam Sackfield, E Vanderhooft, Sam Mularczyk, David Stanley & Tony Wolfs.
We're trying to make a good looking CSS reset, to make your life easier and much more beautiful.

##Some custom classes/ids
| Class/ID                  | Function                               |
| ------------------------- |----------------------------------------|
| .light                    | Light font weight                      |
| .quote                    | Design for quotes                      |
| .container                | Centered responsive container          |
| .column                   | Container                              |
| .half, .one-third, etc    | Responsive, use in addition to .column |

##Demo
[Click here](https://rawgithub.com/ibbyib/framework/master/demo.html) to check out our progress. Remember that this is more of a starting template, you're supposed to apply own styling to it, but you may do whatever you want.

##Using PHP in your site
	With the help of PHP you can make your header and footer dynamic meaning when you make a change to the header in one place it will apply to all pages. Plus dynaic headers save space!

	All you need to do is create a header.php but all your code such as 
		<!DOCTYPE html>
		<html>
			<head>
  				<title>Framework Demo</title>
  					<link rel="stylesheet" href="css/frames.css" />
  					<link rel="stylesheet" href="css/demo.css" />
			</head>
		<body>
  			<div class="fixedheader">
  			</div>

  	Then in index.php at the top add <?php include 'header.php' ?>

  	Now do the same but with the footer.