// Child Theme Javascript Handlers
// ==================================================
( function ( $ ) {

    // Document
    // ========
    $( document )

        // Executes when HTML-Document is loaded and DOM is ready
        // ==================================================
        .ready( function () {

            // Single post
            // ==================================================
            if ( $( '.single .inside-article .entry-content' ).length ) {

                // Pros & cons
                $( '.single .inside-article .entry-content .su-row' ).each( function () {
                    if (
                        $( this ).find( 'div:contains("Cons")' ).length &&
                        $( this ).find( 'i.sui.sui-ban' ).length ||
                        $( this ).find( 'div:contains("Pros")' ).length &&
                        $( this ).find( 'i.sui.sui-check' ).length ) {
                        $( this ).addClass( 'pros-and-cons' )
                    } else if (
                        $( this ).find( 'div:contains("Serious Conditions")' ).length &&
                        $( this ).find( 'i.sui.sui-ban' ).length ||
                        $( this ).find( 'div:contains("Minor Conditions")' ).length &&
                        $( this ).find( 'i.sui.sui-times' ).length ) {
                        $( this ).addClass( 'pros-and-cons' )
                    }
                } );

                // Specifications
                $( '.thrivecb' ).each( function () {
                    if (
                        $( this ).find( 'h2:contains("Specifications")' ).length ||
                        $( this ).find( 'h3:contains("Specifications")' ).length ||
                        $( this ).find( 'h4:contains("Specifications")' ).length ) {
                        $( this ).addClass( 'specifications' );
                        $( this ).find( 'strong:contains("\u00a0")' ).addClass( 'empty-break' );
                    }
                } );

                // Final verdict box
                $( '.su-box.su-box-style-default' ).each( function () {
                    if (
                        $( this ).find( 'div.su-box-title:contains("Final Verdict")' ).length ) {
                        $( this ).addClass( 'final-verdict' )
                    }
                } );
            }


        } );

    // Window
    // ========
    $( window )

        // Executes when complete page is fully loaded, including all frames, objects and images
        // ==================================================
        .load( function () {
            // Numbered headings
            $( '.single .inside-article .entry-content h2, .single .inside-article .entry-content h3' ).each( function () {
                var $headingId
                $headingId = $( this ).find( 'span' ).length ? $( this ).find( 'span' ).attr( 'id' ) : '';
                if ( $( this ).text().match( /^\d(\.+)/ ) ) {
                    $( this ).addClass( 'dhn' ).attr( 'id', $headingId );
                    $( this ).html( '<span>' + $( this ).text().slice( 0, 2 ) + '</span>' + $( this ).text().slice( 2 ) );
                }
                if ( $( this ).text().match( /^\d\d(\.+)/ ) ) {
                    $( this ).addClass( 'dhn' ).attr( 'id', $headingId );
                    $( this ).html( '<span>' + $( this ).text().slice( 0, 3 ) + '</span>' + $( this ).text().slice( 3 ) );
                } else if ( $( this ).text().match( /^\u00a0\d\d(\.+)/ ) ) {
                    $( this ).addClass( 'dhn' );
                    $( this ).html( '<span>' + $( this ).text().slice( 0, 4 ) + '</span>' + $( this ).text().slice( 4 ) );
                }
                if ( $( this ).text().match( /^\d\d\d(\.+)/ ) ) {
                    $( this ).addClass( 'dhn' ).attr( 'id', $headingId );
                    $( this ).html( '<span>' + $( this ).text().slice( 0, 4 ) + '</span>' + $( this ).text().slice( 4 ) );
                }
            } );
            // TOC
            // ==================================================
            if ( $( '.dd-post-toc' ).length && $( 'div#toc_container' ).length ) {
                $( '.dd-post-toc' ).append( $( 'div#toc_container' ) );
            }
            // Instagram iframe
            // ==================================================
            $( '.single .inside-article .entry-content iframe.instagram-media' ).each( function () {
                $( this ).wrap( '<div class="dd-instagram-container"></div>');
            })
        } )

        // Executes when scrolling page
        // ==================================================
        .scroll( function () {

        } )

        // Executes when resizing page
        // ==================================================
        .resize( function () {

        } );

} )( jQuery );