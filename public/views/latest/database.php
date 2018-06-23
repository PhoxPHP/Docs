#parent<"layout">

#viewAs<"title">
	PhoxPHP - Database
#stopView

#viewAs<"misc">
	<script type="text/javascript">
		window.label = 'database';
	</script>
#stopView

#viewAs<"content">
	<div class="ui-documentation">
		<div class="container">
			<div class="row">
				<h1>
					#{config('app')->get('current_version')}
				</h1>
			</div>
		</div>
		<div class="ui-documentation-index container">
			<div class="ui-documentation-index-row row">
				#include<"partials/docs-sidebar">
				<div class="ui-documentation-index-row-content col-12 col-sm-12 col-md-9">
					<h4>
						Database
					</h4>
					<h5>
						Note: This is not the full documentation of this component as it is still being developed.
					</h5>
					<h5>
						This framework uses <a href="https://github.com/PhoxPHP/Glider" target="_blank">Glider ORM</a> to handle it's database operations.
					</h5>
					<h4>
						Configuration
					</h4>
					<h5>
						Configuration file for this component is in public/config/database.php which contains an array of set configurations.
					</h5>
					<h4>
						Supported drivers.
					</h4>
					<h5>
						This ORM only supports two database drivers at the moment:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							Pdo
						</p>
						<p>
							Mysqli
						</p>
					</div>
					<h4>
						Basic example
					</h4>
<pre class="code slim"><a>Users</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> Users <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'users'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'name'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }
}
</pre>
					<h5>
						When creating a model object, you have to make sure that the return types of both primaryKey and accessibleProperties are added to avoid errors.
					</h5>
					<h4>
						Basic CRUD
					</h4>
					<h5>
						Note: CRUD stands for Create, Read, Update and Delete.
					</h5>
					<h5 class="title">
						Create
					</h5>
<pre class="code slim"><a>UsersController</a>
<span class="arrow">use</span> App\Controller;
<span class="arrow">use</span> Users;

<span class="arrow">class</span> UsersController <span class="arrow">extends</span> Controller
{

    public <span class="arrow">function</span> add()
    {
    	<span class="var">$user</span> <span class="arrow">= new</span> Users();
    	<span class="var">$user</span><span class="arrow">-></span><span class="var">name</span> <span class="arrow">=</span> <span class="str">'your name'</span>;
    	<span class="var">$user</span><span class="arrow">-></span>save();
    }

}
</pre>

					<h5 class="title">
						Read
					</h5>
<pre class="code slim"><a>UsersController</a>
<span class="arrow">use</span> App\Controller;
<span class="arrow">use</span> Users;

<span class="arrow">class</span> UsersController <span class="arrow">extends</span> Controller
{

    public <span class="arrow">function</span> all()
    {
    	<span class="var">$user</span> <span class="arrow">= new</span> Users();
    	<span class="var">$allUsers</span> <span class="arrow">=</span> <span class="var">$users</span><span class="arrow">-></span>all();
    }

}
</pre>
					<h5 class="title">
						Update
					</h5>
					<h6>
						To update a model, you need to pass the primary key as a property on the model object. 
					</h6>
<pre class="code slim"><a>UsersController</a>
<span class="arrow">use</span> App\Controller;
<span class="arrow">use</span> Users;

<span class="arrow">class</span> UsersController <span class="arrow">extends</span> Controller
{

    public <span class="arrow">function</span> update()
    {
    	<span class="var">$user</span> <span class="arrow">=</span> Users::findById(1);
    	<span class="var">$user</span><span class="arrow">-></span><span class="var">name</span> <span class="arrow">=</span> <span class="str">'another name'</span>;
    	<span class="var">$user</span><span class="arrow">-></span>save();
    }

}
</pre>

					<h5 class="title">
						Delete
					</h5>
					<h6>
						To delete a model, you need to pass only the primary key as a property on the model object just like when updating a model. In the example below, the primary key which is id, is already being passed in the findBy method so there is no need of setting it's property again.
					</h6>
<pre class="code slim"><a>UsersController</a>
<span class="arrow">use</span> App\Controller;
<span class="arrow">use</span> Users;

<span class="arrow">class</span> UsersController <span class="arrow">extends</span> Controller
{

    public <span class="arrow">function</span> delete()
    {
    	<span class="var">$user</span> <span class="arrow">=</span> User::findById(4);
    	<span class="var">$user</span><span class="arrow">-></span>delete();
    }

}
</pre>
					<h4>
						Glider Methods
					</h4>
					<h5 class="title">
						first()
					</h5>
					<h6>
						Returns first row as model instance.
					</h6>
<pre class="code slim"><span class="var">$user</span> <span class="arrow">= new</span> Users();
<span class="var">$first</span> <span class="arrow">=</span> <span class="var">$users</span><span class="arrow">-></span>first();
</pre>
					<h5 class="title">
						find($primaryKey)
					</h5>
					<h6>
						The find method allows you to retrieve a record using the primary key specified in the model.						
					</h6>
<pre class="code slim"><span class="var">$user</span> <span class="arrow">= new</span> Users();
<span class="var">$findUser</span> <span class="arrow">=</span> <span class="var">$users</span><span class="arrow">-></span>find(4);
</pre>
					<h5 class="title">
						findBy<i>Keyword</i>($keyword)
					</h5>
					<h6>
						The find method allows you to retrieve a record using keyword specified after findBy.						
					</h6>
<pre class="code slim"><span class="var">$user</span> <span class="arrow">=</span> Users::findByName('john');
</pre>
					<h5 class="title">
						last()
					</h5>
					<h6>
						Returns last row as model instance.
					</h6>
<pre class="code slim"><span class="var">$user</span> <span class="arrow">= new</span> Users();
<span class="var">$first</span> <span class="arrow">=</span> <span class="var">$users</span><span class="arrow">-></span>last();
</pre>

					<h5 class="title">
						addPropertyIf(<i>Bool</i> $condition=null, <i>String</i> $property, $value=null)
					</h5>
					<h6>
						Sets a model property if the condition is true.
					</h6>

					<h5 class="title">
						addPropertyIfNot(<i>Bool</i> $condition=null, <i>String</i> $property, $value=null)
					</h5>
					<h6>
						Sets a model property if the condition is not true i.e is false.
					</h6>

					<h4>
						Relationships
					</h4>
					<h5>
						Glider ORM has two types of rerelationships. They are listed below:
					</h5>
					<div class="ui-documentation-info-block">
						<p>
							i. HasOne/One to one
						</p>
						<p>
							ii. HasMany/One to many
						</p>
					</div>
					<h4>
						HasOne/One to one
					</h4>
					<table class="table">
						<tbody>
							<tr>
								<th>Parent model</th>
								<th>Relationship type</th>
								<th>Related model</th>
							</tr>
							<tr>
								<td>User</td>
								<td>has one</td>
								<td>Avatar</td>
							</tr>
						</tbody>
					</table>
					<h5>
						Let us define a <a>hasone</a> relationship between a <a>user model</a> and <a>avatar model</a>.
					</h5>
<pre class="code slim"><a>User model</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> User <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'users'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'name'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }
}
</pre>

<pre class="code slim"><a>Avatar model</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> Avatar <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'avatars'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'user_id'</span>, <span class="str">'avatar'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }
}
</pre>					
					<h5>
						Now define the relationship in <a>user model</a>.
					</h5>
<pre class="code slim"><a>User model</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> User <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'users'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'name'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }

    public <span class="arrow">function</span> avatar()
    {
    	return <span class="var">$this</span><span class="arrow">-></span>hasOne([
            <span class="str">'related_model'</span> <span class="arrow">=></span> Common\Models\Avatar::class
            <span class="str">'related_model_table'</span> <span class="arrow">=></span> <span class="str">'avatars'</span>
            <span class="str">'model_foreign_key'</span> <span class="arrow">=></span> <span class="str">'user_id'</span>
            <span class="str">'model_key'</span> <span class="arrow">=></span> <span class="var">$this</span><span class="arrow">-></span>primaryKey()
    	]);
    }
}
</pre>
					<h5>
						Now that we have the models setup, we will find a <a>user</a> and get the user's <a>avatar</a>. 
					</h5>
<pre class="code slim">
<a>UsersController.php</a><span class="class">use</span> User;
<span class="class">use</span> App\Controller;

<span class="class">class</span> UsersController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> getAvatar(<span class="var">$params</span>, User <span class="var">$user</span>)
    {
        <span class="var">$avatar</span> <span class="arrow">=</span> <span class="var">$user</span><span class="arrow">-></span>find(<span class="var">$params[<span class="str">'id'</span>]</span>)<span class="arrow">-></span>avatar();
    }

}
</pre>
					<h5>
						The hasOne relationship type returns just one row which is an instance of the related model even if there are more than one rows in the database table.
					</h5>
					<h4>
						Saving a HasOne relationship
					</h4>
					<h5>
						Before saving a <a>HasOne</a> relationship, you have to be aware that even after saving it, you will still only get just one model result when fetching a model using <a>HasOne</a>.
					</h5>
<pre class="code slim">
<a>UsersController.php</a><span class="class">use</span> User;
<span class="class">use</span> Avatar;
<span class="class">use</span> App\Controller;

<span class="class">class</span> UsersController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> addAvatar(<span class="var">$params</span>, User <span class="var">$user</span>)
    {
    	<span class="var">$newAvatar</span> <span class="arrow">= new</span> Avatar();
    	<span class="var">$newAvatar</span><span class="arrow">-></span><span class="var">avatar</span> <span class="arrow">=</span> <span class="str">'new_avatar_path'</span>;
       <span class="var">$avatar</span> <span class="arrow">=</span> <span class="var">$user</span><span class="arrow">-></span>find(<span class="var">$params[<span class="str">'id'</span>]</span>)<span class="arrow">-></span>avatar()<span class="arrow">-></span>save(<span class="var">$newAvatar</span>);
    }

}
</pre>
					<h4>
						Deleting a HasOne relationship
					</h4>
<pre class="code slim">
<a>UsersController.php</a><span class="class">use</span> User;
<span class="class">use</span> Avatar;
<span class="class">use</span> App\Controller;

<span class="class">class</span> UsersController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> addAvatar(<span class="var">$params</span>, User <span class="var">$user</span>)
    {
       <span class="var">$user</span><span class="arrow">-></span>find(<span class="var">$params[<span class="str">'id'</span>]</span>)<span class="arrow">-></span>avatar()<span class="arrow">-></span>delete();
    }

}
</pre>
					<h4>
						HasMany/ One to Many
					</h4>
					<table class="table">
						<tbody>
							<tr>
								<th>Parent model</th>
								<th>Relationship type</th>
								<th>Related model</th>
							</tr>
							<tr>
								<td>User</td>
								<td>has many</td>
								<td>Post</td>
							</tr>
						</tbody>
					</table>
					<h5>
						We have defined a <a>HasOne</a> relationship. Now, let us define a <a>HasMany</a> relationship between a <a>user model</a> and <a>post model</a>.
					</h5>
<pre class="code slim"><a>User model</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> User <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'users'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'name'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }
}
</pre>

<pre class="code slim"><a>Post model</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> Post <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'posts'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'user_id'</span>, <span class="str">'title'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }
}
</pre>					
					<h5>
						Now define the relationship in <a>user model</a>.
					</h5>
<pre class="code slim"><a>User model</a><span class="arrow">use</span> \Kit\Glider\Model\Model;

<span class="arrow">class</span> User <span class="arrow">extends</span> Model
{
    // Model connection id
    public <span class="var">$connectionId</span> = <span class="str">'pdo'</span>;

    // Model table
    public <span class="var">$table</span> = <span class="str">'users'</span>;

    public<span class="arrow"> function</span> accessibleProperties() : Array
    {
        <span class="arrow">return</span> [<span class="str">'id'</span>, <span class="str">'name'</span>];
    }

    public<span class="arrow"> function</span> primaryKey() : String
    {
        <span class="arrow">return</span> <span class="str">'id'</span>;
    }

    public <span class="arrow">function</span> posts()
    {
    	return <span class="var">$this</span><span class="arrow">-></span>hasMany([
            <span class="str">'related_model'</span> <span class="arrow">=></span> Common\Models\Post::class
            <span class="str">'related_model_table'</span> <span class="arrow">=></span> <span class="str">'posts'</span>
            <span class="str">'model_foreign_key'</span> <span class="arrow">=></span> <span class="str">'user_id'</span>
            <span class="str">'model_key'</span> <span class="arrow">=></span> <span class="var">$this</span><span class="arrow">-></span>primaryKey()
    	]);
    }
}
</pre>
					<h5>
						Now that we have the models setup, we will find a <a>user</a> and get the user's <a>posts.</a> 
					</h5>
<pre class="code slim">
<a>UsersController.php</a><span class="class">use</span> User;
<span class="class">use</span> App\Controller;

<span class="class">class</span> UsersController <span class="class">extends</span> Controller
{
    public <span class="arrow">function</span> getPosts(<span class="var">$params</span>, User <span class="var">$user</span>)
    {
        <span class="var">$posts</span> <span class="arrow">=</span> <span class="var">$user</span><span class="arrow">-></span>find(<span class="var">$params[<span class="str">'id'</span>]</span>)<span class="arrow">-></span>posts<span class="arrow">-></span>all();
        <span class="var">$view</span> <span class="arrow">=</span> <span class="var">$this</span><span class="arrow">-></span>setVariable(<span class="str">'posts'</span>, <span class="var">$posts</span>);
        <span class="var">$view</span><span class="arrow">-></span>render();
    }

}
</pre>
					<h5 class="title">
						And in your view:
					</h5>
<pre class="code slim html"><a>posts.php</a>&#35;each<$posts : $post>

    &#35;{$post->title}

&#35;stopEach
</pre>					
					<div class="ui-documentation-nav">
						<a href="#{siteUrl('docs/latest/filesystem')}" class="prev">
							Previous: Filesystem
						</a>
						<a href="#{siteUrl('docs/latest/routing')}" class="next">
							Next: Routing
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
#stopView

#viewAs<"scripts">

#stopView