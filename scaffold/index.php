<?php include 'header.php' ?>
  <div class="container">
    <h1 class="logo-demo">Framework</h1>
    <h5 class="light subt">A Project by Dylan Dixon, Håkon Underbakke, Adam Sackfield, E Vanderhooft, Sam Mularczyk, David Stanley &amp; Tony Wolfs</h5>
  </div>
  <div class="container">
    <h1><span class="light">Header</span> Header <strong>Header</strong></h1>
    <h2><span class="light">Header</span> Header <strong>Header</strong></h2>
    <h3><span class="light">Header</span> Header <strong>Header</strong></h3>
    <h4><span class="light">Header</span> Header <strong>Header</strong></h4>
    <h5><span class="light">Header</span> Header <strong>Header</strong></h5>
    <p>Pellentesque habitant morbi tristique <strong>senectus et netus</strong> et malesuada fames ac <i>turpis egestas</i>. Vestibulum tortor quam, <a href="#">feugiat vitae</a>, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    <p class="quote">
      Pellentesque habitant morbim,<br />
      tristique senectus et netus et malesuada,<br />
      fames ac turpis egestas.
    </p>
  </div>
  <div class="container">
    <h2><strong>Example #1</strong> - Forms &amp; Tables</h2>
    <div class="row">
      <div class="column half">
        <table>
          <thead>
            <tr>
              <th colspan="2">Name Database</th>
            </tr>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>James</td>
              <td>Smith</td>
            </tr>
          <tr>
            <td>Bill</td>
            <td>Washington</td>
          </tr>
          <tr>
              <td>Jim</td>
              <td>Anon</td>
          </tr>
          <tr>
            <td>Bobby</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Jacob</td>
            <td>Fischer</td>
          </tr>
          <tr>
            <td>Miley</td>
            <td>Smith</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">All names are random</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="column half">
      <form action="#">
        <table class="nostyle">
          <tr>
            <td><label for="username">Username</label></td>
            <td><input type="text" name="username" /></td>
          </tr>
          <tr>
              <td><label for="password">Password</label></td>
              <td><input type="password" name="password" /></td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" value="Log in" />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <h2><strong>Example #2</strong> - Blog post</h2>

    <article>
      <header>
          <h3>Lorem Ipsum</h3>
          <h5 class="d-t">April 3rd - 2014</h5>
       </header>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <ol>
             <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
             <li>Aliquam tincidunt mauris eu risus.</li>
             <li>Vestibulum auctor dapibus neque.</li>
          </ol>
	       <footer>
           Written by Håkon Underbakke [social icons]
         </footer>
    </article>

    <article>
      <header>
          <h3>Lorem Ipsum</h3>
          <h5 class="d-t">April 3rd - 2014</h5>
       </header>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
         <footer>
           Written by Håkon Underbakke [social icons]
         </footer>
    </article>
  </div>
  <div class="container">

    <h2><strong>Example #3</strong> - Buttons</h2>
    <h4>Use <strong>.btn</strong> as well as the classes on the links</h4>
    <p>
    <a href="#" class="btn unline">.unline</a>
    <a href="#" class="btn filr">.filr</a>
    <a href="#" class="btn filrb">.filrb</a>
    <a href="#" class="btn sqro">.sqro</a>
    </p>
    <h3><strong>In Use:</strong></h3>
    <p>
      <div id="ppmsg">
        <header>Close document<span>X</span></header>
        <p>
          Do you wish to save before closing?
        </p>
        <a href="#" class="btn filr sml">Save</a>
        <a href="#" class="btn filrb sml red">Don't Save</a>
        <div class="clear"></div>
      </div>
      <div id="searchex">
        <table class="nostyle" id="searx">
          <tr>
            <td>
              <input type="text" placeholder="Google" />
            </td>
            <td>
              <a href="#" class="btn sqro sml">Search</a>
            </td>
          </tr>
        </table>
      </div>
    </p>
    <p><button class="button-rounded">Yes</button><button class="button-rounded_pos">no</button><button class="button-rounded_neg">perhaps</button><button class="button-rounded_colorful">LOrem ipsum dolor.</button>
    </p>
  </div>
  <div class="container">
    <div class="nav">
      <ul>
        <a href="#"><li>Home</li></a>
        <a href="#"><li>About</li></a>
        <a href="#"><li>Contact</li></a>
      </ul>
    </div>
  	<h1><div class="title">Yeeaah</div><span class="subtitle">this is a subtitle whee</span></h1>
    <div class="grid_5-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique, erat vel condimentum porta, nisl diam auctor dui, sit amet viverra nisi mi quis neque. Duis non porttitor tortor. Proin dapibus elit ac augue luctus scelerisque. Fusce rutrum volutpat felis. Nunc sed leo placerat leo facilisis tincidunt. Etiam et aliquam lacus, vel convallis augue. Curabitur malesuada interdum enim id convallis. Donec euismod et felis ac rutrum. Ut vitae interdum est. In magna enim, rutrum sed bibendum vel, dictum ultricies velit.</p></div><div class="grid_3"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique, erat vel condimentum porta, nisl diam auctor dui, sit amet viverra nisi mi quis neque. Duis non porttitor tortor. Proin dapibus elit ac augue luctus scelerisque. Fusce rutrum volutpat felis. Nunc sed leo placerat leo facilisis tincidunt. Etiam et aliquam lacus, vel convallis augue.</p></div><div class="grid_9"><p>Fusce tristique, erat vel condimentum porta, nisl diam auctor dui, sit amet viverra nisi mi quis neque. Duis non porttitor tortor. Proin dapibus elit ac augue luctus scelerisque. Fusce rutrum volutpat felis. Nunc sed leo placerat leo facilisis tincidunt. Etiam et aliquam lacus, vel convallis augue.</p></div>

  </div>
  <div id="popupbox">
    Que function!
  </div>
  <div class="container">
  <h2><strong>Example #4</strong> - Cards</h2>
  <div class="card"><h1>This is an example of the cards</h1><br/><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum ante non cursus mattis. Aliquam vestibulum magna a turpis vehicula pharetra. Duis dignissim, orci non vehicula sollicitudin, nisl massa pharetra mauris, quis egestas nibh sem eget dui. Suspendisse libero velit, ullamcorper id sollicitudin in, sollicitudin vitae nulla. Pellentesque id magna adipiscing, vestibulum dui ac, ornare velit. Vestibulum dapibus justo et.</p></div>
   <div class="card_2"><h1>This is an example of the cards</h1><br/><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum ante non cursus mattis. Aliquam vestibulum magna a turpis vehicula pharetra. Duis dignissim, orci non vehicula sollicitudin, nisl massa pharetra mauris, quis egestas nibh sem eget dui. Suspendisse libero velit, ullamcorper id sollicitudin in, sollicitudin vitae nulla. Pellentesque id magna adipiscing, vestibulum dui ac, ornare velit. Vestibulum dapibus justo et.</p></div>
 </div>
 <?php include 'footer.php' ?>
