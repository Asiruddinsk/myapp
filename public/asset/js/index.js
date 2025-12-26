new Typewriter( '#typewriter', {
    strings: [ 'Website Designer',
        'web developer',
        'graphic designer',
        'UI/UX designer',
        'front-end developer',
        'back-end developer'
    ],
    autoStart: true,
    loop: true,
} );

function openMenuFunction ()
{
    var x = document.getElementById( "myNav" ).classList.toggle( 'show' );
    document.getElementById( "mySignin" ).classList.remove( "show-signin" );
    document.getElementById( 'mySignin_1' ).classList.remove( 'mySignin-content-show' );
    document.getElementById( 'mySignin_2' ).classList.remove( 'mySignin-content-show-1' );
}
function closeFunction ()
{
    document.getElementById( "myNav" ).classList.remove( 'show' );

}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function ( event )
{
    if ( !event.target.matches( '.bar' ) )
    {
        var dropdowns = document.getElementsByClassName( "myNav" );
        var i;
        for ( i = 0; i < dropdowns.length; i++ )
        {
            var openDropdown = dropdowns[ i ];
            if ( openDropdown.classList.contains( 'show' ) )
            {
                openDropdown.classList.remove( 'show' );
            }
        }
    }
}


// signin btn===========

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function signInFunction ()
{
    document.getElementById( "mySignin" ).classList.toggle( "show-signin" );

    // forgot remove=start
    document.getElementById( 'mySignin_2' ).classList.remove( 'mySignin-content-show-1' );
    // forgot remove=start

}

function signinCloseFunction ()
{
    document.getElementById( "mySignin" ).classList.remove( "show-signin" );
    document.getElementById( 'mySignin_1' ).classList.remove( 'mySignin-content-show' );
    document.getElementById( 'mySignin_2' ).classList.remove( 'mySignin-content-show-1' );


}

function registerFunction ()
{
    document.getElementById( 'mySignin_1' ).classList.toggle( 'mySignin-content-show' );

    // forgot remove start
    document.getElementById( 'mySignin_2' ).classList.remove( 'mySignin-content-show-1' );
    // forgot remove end

}


function forgotFunction ()
{
    // signin and register remove start
    document.getElementById( "mySignin" ).classList.remove( "show-signin" );
    // signin and register remove end


    document.getElementById( 'mySignin_2' ).classList.toggle( 'mySignin-content-show-1' );

}

// Close the dropdown menu if the user clicks outside of it
// window.onclick = function ( e )
// {
//     if ( !e.target.matches( '.signup-btn' ) )
//     {
//         var dropdowns = document.getElementsByClassName( "mySignin-content" );
//         var i;
//         for ( i = 0; i < dropdowns.length; i++ )
//         {
//             var openDropdown = dropdowns[ i ];
//             if ( openDropdown.classList.contains( 'show-signin' ) )
//             {
//                 openDropdown.classList.remove( 'show-signin' );
//             }
//         }
//     }
// }






// filter==============


filterSelection( "all" )
function filterSelection ( c )
{
    var x, i;
    x = document.getElementsByClassName( "filterDiv" );
    if ( c == "all" ) c = "";
    for ( i = 0; i < x.length; i++ )
    {
        w3RemoveClass( x[ i ], "show" );
        if ( x[ i ].className.indexOf( c ) > -1 ) w3AddClass( x[ i ], "show" );
    }
}

function w3AddClass ( element, name )
{
    var i, arr1, arr2;
    arr1 = element.className.split( " " );
    arr2 = name.split( " " );
    for ( i = 0; i < arr2.length; i++ )
    {
        if ( arr1.indexOf( arr2[ i ] ) == -1 ) { element.className += " " + arr2[ i ]; }
    }
}

function w3RemoveClass ( element, name )
{
    var i, arr1, arr2;
    arr1 = element.className.split( " " );
    arr2 = name.split( " " );
    for ( i = 0; i < arr2.length; i++ )
    {
        while ( arr1.indexOf( arr2[ i ] ) > -1 )
        {
            arr1.splice( arr1.indexOf( arr2[ i ] ), 1 );
        }
    }
    element.className = arr1.join( " " );
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById( "myBtnContainer" );
var btns = btnContainer.getElementsByClassName( "btn" );
for ( var i = 0; i < btns.length; i++ )
{
    btns[ i ].addEventListener( "click", function ()
    {
        var current = document.getElementsByClassName( "active-filter" );
        current[ 0 ].className = current[ 0 ].className.replace( " active-filter", "" );
        this.className += " active-filter";
    } );
}