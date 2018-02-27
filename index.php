<?php
$page=1;
require_once 'header.php';
?>       
    <div class="container MinOpacity">
      <div class="jumbotron <?php if(isset($_GET['reussi']))echo'animated bounce'; if(isset($_GET['error']))echo'animated shake'; ?>">
        <h1>Bootstrap 3 Style Guide</h1>
        <p>A quick preview of everything Bootstrap has to offer.</p>
        <p><a class="btn btn-primary btn-large">Learn more</a></p>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default" id="headings">
            <div class="panel-heading">Headings</div>
            <div class="panel-body">
            <h1 class="page-header">Page Header <small>With Small Text</small></h1>
            <h1>This is an h1 heading</h1>
            <h2>This is an h2 heading</h2>
            <h3>This is an h3 heading</h3>
            <h4>This is an h4 heading</h4>
            <h5>This is an h5 heading</h5>
            <h6>This is an h6 heading</h6>
            </div>
          </div>
          <div class="panel panel-default" id="tables">
            <div class="panel-heading">Tables
            </div>
            <div class="panel-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Tables</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Michael</td>
                  <td>Are formatted like this</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Lucille</td>
                  <td>Do you like them?</td>
                </tr>
                <tr class="success">
                  <td>3</td>
                  <td>Success</td>
                  <td></td>
                </tr>
                <tr class="danger">
                  <td>4</td>
                  <td>Danger</td>
                  <td></td>
                </tr>
                <tr class="warning">
                  <td>5</td>
                  <td>Warning</td>
                  <td></td>
                </tr>
                <tr class="active">
                  <td>6</td>
                  <td>Active</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-bordered table-condensed">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Tables</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Michael</td>
                  <td>This one is bordered and condensed</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Lucille</td>
                  <td>Do you still like it?</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel-default" id="content-formatting">
            <div class="panel-heading">A Propos de Nous
            </div>
            <div class="panel-body">
            <p class="lead">L'histoire du Zoo Parc </p>
            <p>  Le Parc Zoologique <i>"Zoo Parc"</i> est la réalisation d’un rêve d’enfant : la passion du monde animal, Anas Boudyach la reçut comme un coup de foudre à l’âge de 4 ans en visitant la ménagerie d’un grand cirque français.
            Enfant, adolescent, puis étudiant, Michel passait tous ses temps libres dans les zoos, bien décidé à monter le sien, un jour. L’idée du “zoo Parc" remonte à 1978.
            Il faut dire que le projet ne rencontra, au départ, que scepticisme et hostilité : personne n’y croyait hormis le docteur Mehdi Louafdi qui fut le seul bouclier de Anas Boudyach et Amine Nejjar, ces deux jeunes fous qui osaient aller à contre-courant !
            Mais la détermination de Anas et Amine vint à bout de toutes les difficultés, et le 28 juin 1986 le Parc Zoologique <b> "Zoo Parc" </b> ouvrait ses portes.
            Depuis lors, une politique offensive en matière de communication et d’investissements a permis de construire des installations nouvelles, de plus en plus audacieuses.
            En 2018, le zoo s’étend sur 18 hectares, compte <b> 2000 </b> animaux originaires des cinq continents et appartenant à <b>360</b> espèces différentes.
            Il emploie de 130 à 220 salariés suivant la saison, et le nombre annuel de visiteurs dépasse les <b>600 000</b></p>
            
            <p class="text-muted"> <i><b> La Plaine Africaine </b></i></p>
            <p class="text-warning"> <b><i> Aqualand </i></b></p>
            <p class="text-danger"> <b><i> Le Vivarium </i></b> </p>
            <p class="text-info">  <i><b> Le Coin des Félins </b></i></p>
            <p class="text-success"> <i><b> Monkey Island </b></i> </p>
            <p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>
            <hr>
            <address>                <strong>Twitter, Inc.</strong><br>                795 Folsom Ave, Suite 600<br>                San Francisco, CA 94107<br>                <abbr title="Phone">P:</abbr> (123) 456-7890              </address><address class="col-6">                <strong>Full Name</strong><br>                <a href="mailto:#">first.last@example.com</a>              </address>
            <hr>
            <blockquote>Here's what a blockquote looks like in Bootstrap. <small>Use <code>small</code> to identify the source.</small>
            </blockquote>
            <hr>
            <div class="row">
              <div class="col-xs-6">
                <ul>
                  <li>Normal Unordered List</li>
                  <li>Can Also Work
                    <ul>
                      <li>With Nested Children</li>
                    </ul>
                  </li>
                  <li>Adds Bullets to Page</li>
                </ul>
              </div>
              <div class="col-xs-6">
                <ol>
                  <li>Normal Ordered List</li>
                  <li>Can Also Work
                    <ol>
                      <li>With Nested Children</li>
                    </ol>
                  </li>
                  <li>Adds Bullets to Page</li>
                </ol>
              </div>
            </div>
            <hr>
            <pre>function preFormatting() {  // looks like this;  var something = somethingElse;  return true;}</pre>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default" id="forms">
        <div class="panel-heading">Forms
        </div>
        <div class="panel-body">
        <form>
          <fieldset>
            <legend>Legend</legend>
            <div class="form-group">
              <label for="exampleInputEmail">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox">Check me out</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </fieldset>
        </form>
        <hr>
        <form class="form-inline">
          <input type="text" class="form-control" placeholder="Email" style="width: 200px;">
          <input type="password" class="form-control" placeholder="Password" style="width: 200px;">
          <div class="checkbox">
            <label>
              <input type="checkbox">Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Sign in</button>
        </form>
        <hr>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group has-warning">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail1" placeholder="Email">
            </div>
          </div>
          <div class="form-group has-error">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail2" placeholder="Email">
            </div>
          </div>
          <div class="form-group has-success">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              <div class="checkbox">
                <label>
                  <input type="checkbox">Remember me</label>
              </div>
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </div>
        </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default" id="buttons">
            <div class="panel-heading">Buttons
            </div>
            <div class="panel-body">
            <p><!-- Standard gray button with gradient -->
              <button type="button" class="btn btn-default">Default</button>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <button type="button" class="btn btn-primary">Primary</button>
              <!-- Indicates a successful or positive action -->
              <button type="button" class="btn btn-success">Success</button>
              <!-- Contextual button for informational alert messages -->
              <button type="button" class="btn btn-info">Info</button>
              <!-- Indicates caution should be taken with this action -->
              <button type="button" class="btn btn-warning">Warning</button><br />
              <!-- Indicates a dangerous or potentially negative action -->
              <button type="button" class="btn btn-danger">Danger</button><br />
              <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
              <button type="button" class="btn btn-link">Link</button></p>
            <p>
              <button type="button" class="btn btn-primary btn-lg">Large</button>
              <button type="button" class="btn btn-primary disabled">Disabled</button>
              <button type="button" class="btn btn-primary">Default</button>
              <button type="button" class="btn btn-primary btn-sm">Small</button>
              <button type="button" class="btn btn-primary btn-xs">Extra Small</button></p>
          </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel-default" id="images">
            <div class="panel-heading">Images
            </div>
            <div class="panel-body">
            <p><img src="http://placehold.it/120x100" class="img-rounded">
              <img src="http://placehold.it/120x100" class="img-circle">
              <img src="http://placehold.it/120x100" class="img-thumbnail"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="panel panel-default" id="dropdowns">
            <div class="panel-heading">Dropdowns
            </div>
            <div class="panel-body clearfix">
            <div class="dropdown">
              <!-- Link or button to toggle dropdown -->
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static;">
                <li class="dropdown-header">Dropdown header</li>
                <li class="disabled">
                  <a tabindex="-1" href="#">Action</a>
                </li>
                <li>
                  <a tabindex="-1" href="#">Another action</a>
                </li>
                <li>
                  <a tabindex="-1" href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a tabindex="-1" href="#">Separated link</a>
                </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="panel panel-default" id="input-groups">
            <div class="panel-heading">Input Groups
            </div>
            <div class="panel-body">
            <div class="input-group">
              <span class="input-group-btn">                <button class="btn btn-default" type="button">Go!</button>              </span><input type="text" class="form-control" placeholder="Username">
            </div><br>
            <div class="input-group">
              <input type="text" class="form-control input-large">
              <span class="input-group-addon input-large">.00</span>
            </div><br>
            <div class="input-group">
              <span class="input-group-addon">$</span><input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default" id="navs">
            <div class="panel-heading">Navs
            </div>
            <div class="panel-body clearfix">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
            <p></p>
            <p></p>
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
            <p></p>
            <p></p>
            <ul class="nav nav-stacked nav-pills">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6" id="navbar">
          <div class="panel panel-default">
            <div class="panel-heading">Navbar
            </div>
            <div class="panel-body">
            <p></p>
            <div class="navbar">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">Your Company</a>
              </div>
              <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a href="#">Home</a>
                  </li>
                  <li>
                    <a href="#">About</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="navbar navbar-inverse">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">Your Company</a>
              </div>
              <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a href="#">Home</a>
                  </li>
                  <li>
                    <a href="#">About</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="navbar">
              <div class="collapse navbar-collapse">
                <a class="btn btn-primary navbar-btn">Navbar Button</a>
                <p class="navbar-text navbar-right">Navbar Text</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default" id="pagination">
            <div class="panel-heading">Pagination
            </div>
            <div class="panel-body">
            <ul class="pagination" style="margin-right: 10px;">
              <li>
                <a href="#">Prev</a>
              </li>
              <li>
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">Next</a>
              </li>
            </ul>
            <ul class="pagination pagination-lg">
              <li>
                <a href="#">Prev</a>
              </li>
              <li>
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">Next</a>
              </li>
            </ul>
            <ul class="pager">
              <li>
                <a href="#">Prev</a>
              </li>
              <li>
                <a href="#">Next</a>
              </li>
            </ul>
          </div>
        </div>
          <div class="panel panel-default" id="labels">
            <div class="panel-heading">Labels and Badges
            </div>
            <div class="panel-body">
            <h3><span class="label label-default">Default</span><span class="label label-success">Success</span><span class="label label-warning">Warning</span><br /><span class="label label-danger">Danger</span><br /><span class="label label-info">Info</span></h3>
            <p class="lead"><a href="#">Inbox <span class="badge">42</span></a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel-default" id="alerts">
            <div class="panel-heading">Alerts
            </div>
            <div class="panel-body">
            <div>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
              </div>
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
              </div>
              <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
              </div>
              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
              </div>
              <div class="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>
                <p>This is a block style alert.</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default" id="progress">
            <div class="panel-heading">Progress Bars
            </div>
            <div class="panel-body">
            <div class="progress">
              <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <div class="progress progress-striped active">
              <div class="progress-bar progress-bar-success"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel panel-default" id="media-object">
            <div class="panel-heading">Media Object
            </div>
            <div class="panel-body">
            <p></p>
            <div class="media">
              <a class="pull-left" href="#">    <img class="media-object" src="https://app.divshot.com/img/placeholder-64x64.gif">  </a>
              <div class="media-body">
                <h4 class="media-heading">Media heading</h4>
                <p>This is the content for your media.</p>
                <div class="media">
                  <a class="pull-left" href="#">    <img class="media-object" src="https://app.divshot.com/img/placeholder-64x64.gif">  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    <p>This is the content for your media.</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
        <div class="col-lg-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">          Cras justo odio        </a><a href="#" class="list-group-item">Dapibus ac facilisis in        </a><a href="#" class="list-group-item">Morbi leo risus        </a><a href="#" class="list-group-item">Porta ac consectetur ac        </a><a href="#" class="list-group-item">Vestibulum at eros        </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">          <h4 class="list-group-item-heading">List group item heading</h4>          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>        </a><a href="#" class="list-group-item">          <h4 class="list-group-item-heading">List group item heading</h4>          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>        </a><a href="#" class="list-group-item">          <h4 class="list-group-item-heading">List group item heading</h4>          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>        </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="panel panel-primary" id="panels">
            <div class="panel-heading">This is a header
            </div>
            <p class="panel-body">This is a panel</p>
            <div class="panel-footer">This is a footer
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="panel panel-success">
            <div class="panel-heading">This is a header
            </div>
            <div class="panel-body">This is a panel</div>
            <div class="panel-footer">This is a footer
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="panel panel-danger">
            <div class="panel-heading">This is a header
            </div>
            <div class="panel-body">This is a panel</div>
            <div class="panel-footer">This is a footer
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="panel panel-warning">
            <div class="panel-heading">This is a header
            </div>
            <div class="panel-body">This is a panel</div>
            <div class="panel-footer">This is a footer
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="panel panel-info">
            <div class="panel-heading">This is a header
            </div>
            <p class="panel-body">This is a panel</p>
            <div class="panel-footer">This is a footer
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="panel panel-default">
            <div class="panel-heading">This is a header
            </div>
            <div class="panel-body">This is a panel</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">First Item</li>
              <li class="list-group-item">Second Item</li>
              <li class="list-group-item">Third Item</li>
            </ul>
            <div class="panel-footer">This is a footer
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="well" id="wells">Default Well
          </div>
          <div class="well well-small">Small Well
          </div>
        </div>
        <div class="col-lg-3">
          <div class="well well-large">Large Padding Well
          </div>
        </div>
      </div>
    </div>
        <hr />
<div class="container MinOpacity">
  <div class="row">
  <div class="col-lg-4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-primary" href="#">View details »</a></p>
  </div>
  <div class="col-lg-4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class="btn btn-primary" href="#">View details »</a></p>
 </div>
  <div class="col-lg-4">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
    <p><a class="btn btn-primary" href="#">View details »</a></p>
  </div>
</div>
  
  <hr />
  
  <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" src="http://placekitten.com/300/200" style="width: 300px; height: 200px;">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" src="http://placekitten.com/300/200" style="width: 300px; height: 200px;">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" src="http://placekitten.com/300/200" style="width: 300px; height: 200px;">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
            </div>
          </div>
        </div>
      </div>
          
          <hr />
          
          <ul id="myTab" class="nav nav-tabs">
        <li class=""><a href="#home" data-toggle="tab">Home</a></li>
        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
        <li class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
            <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
            <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
          </ul>
        </li>
      </ul>
          
          <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade" id="home">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
        </div>
        <div class="tab-pane fade active in" id="profile">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
      </div>
          
          <hr />
          
          <div class="bs-example-tooltips">
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
      </div>
  
          <hr />
          
          <div class="bs-popover-example">
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on left
        </button>
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on top
        </button>
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on bottom
        </button>
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
          Popover on right
        </button>
      </div>
          
          <hr />
          
          
<div class="panel-group" id="accordion">
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
          
          
          
          <hr />
          
          <div id="carousel-example-captions" class="carousel slide bs-docs-carousel-example">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-captions" data-slide-to="1"></li>
          <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img data-src="http://placekitten.com/1140/500" src="http://placekitten.com/1140/500" alt="First slide image">
            <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="item">
            <img data-src="http://placekitten.com/1140/500" src="http://placekitten.com/1140/500" alt="Second slide image">
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="item">
            <img data-src="http://placekitten.com/1140/500" src="http://placekitten.com/1140/500" alt="Third slide image">
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>
          
            
            
            <hr />
            
            
            <!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <img src="http://placekitten.com/400/400" alt="kitty" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
          
          
</div><!-- // container -->

<?php
require_once 'footer.php';
?>