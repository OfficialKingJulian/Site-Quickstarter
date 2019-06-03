# Website Quickstarter

An extremely simple resource, designed to quickly lay out a [basic file structure](#filestructure) and some 'almost-every-website-needs-this' set of [HTML snippets](#htmlsnippets), [CSS classes](#cssclasses), JavaScript functions.

<br>



<a name="filestructure"></a>
## Files

This is  a short list of the files that make up the project, and their functions.

| File  | Name  | Function  |
|  --   |   --  |   --      |
| index.php | Page Template | A template file to show how the files come together to form the document |
| meta.php | Generic Metadata | Contains basic meta tags, to be used globally |
| script-abvfld.js | Head JavaScript Content | Any JavaScript that should be, or needs to be executed in the head, e.g. Google Analytics |
| style-abvfld.css | Above The Fold (in the Head) CSS | Above the fold CSS content, e.g. Navigation Bar, Hero Content, etc.  |
| nav.html | Top of Page Navigation | HTML layout for a top navigation bar |
| foot.html | Bottom of the Page Content | HTML layout for the bottom of the page |
| style-blwfld.css | Below The Fold CSS | Any CSS that does not need to be critically loaded; anything not in the initial viewport |
| script-blwfld.js | JavaScript Content | Any JavaScript that doesn't need to be critically loaded in the head |

These are all included with the PHP code `include`, but it is used with their absolute path, like so;

`$file =  $_SERVER['DOCUMENT_ROOT'];
$file .=  "/elms/file.php";
php include_once($file);`


<br>

<a name="htmlsnippets"></a>
## HTML Snippets

This section explains some pre-constructed HTML snippets which I have found very useful in a lot of projects.

| Example | Name  | Function  |
|  --   |   --  |   --      |
| `<section>`<br>`<div>`<br>`</div><!--`<br>`--><div>`<br>`</div>`<br>`</section>` | Inline Elements | `display:inline-block;` <br> works nicely on these because of the HTML comments |

<br>

<a name="cssclasses"></a>
## CSS Classes

This segment explains a few CSS classes I use in almost every project. 

| Example | Explanation |
| -- | -- |
| `.non-select` | Makes the element non-selectable in [every modern browser](https://stackoverflow.com/questions/924916/is-there-a-way-to-make-a-div-unselectable) |
| `.display-inline-2` | Simply applies [`display:inline-block;`](), and [`width:50%;`]() to the element in question |
| `.display-inline-3` | Simply applies [`display:inline-block;`](), and [`width:33.3%;`]() to the element in question |
| `.display-inline-4` | Simply applies [`display:inline-block;`](), and [`width:25%;`]() to the element in question |
