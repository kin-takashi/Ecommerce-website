// eslint-disable-next-line no-unused-vars
function updateQuantity( index, quantity ) {
	return new Promise( ( resolve, reject ) => {
		const xhr = new XMLHttpRequest();
		xhr.open( 'POST', window.location.href, true );
		xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
		xhr.onload = function() {
			if ( xhr.status === 200 ) {
				resolve();
			} else {
				reject( 'Có lỗi xảy ra khi cập nhật số lượng' );
			}
		};
		xhr.onerror = function() {
			reject( 'Có lỗi xảy ra khi gửi yêu cầu' );
		};
		xhr.send( 'update_quantity=1&index=' + index + '&quantity=' + quantity );
	} );
}

document.addEventListener( 'DOMContentLoaded', function() {
	// Function to update quantity
	// eslint-disable-next-line no-shadow
	function updateQuantity( index, quantity ) {
		return new Promise( ( resolve, reject ) => {
			const xhr = new XMLHttpRequest();
			xhr.open( 'POST', window.location.href, true );
			xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
			xhr.onload = function() {
				if ( xhr.status === 200 ) {
					resolve();
				} else {
					reject( 'Có lỗi xảy ra khi cập nhật số lượng' );
				}
			};
			xhr.onerror = function() {
				reject( 'Có lỗi xảy ra khi gửi yêu cầu' );
			};
			xhr.send( 'update_quantity=1&index=' + index + '&quantity=' + quantity );
		} );
	}

	// Function to handle quantity input change
	function handleQuantityInputChange( input ) {
		const index = input.getAttribute( 'data-index' );
		const quantity = parseInt( input.value );
		updateQuantity( index, quantity )
			.then( updateTotal )
			// eslint-disable-next-line no-console
			.catch( ( error ) => console.error( error ) );
	}

	// Function to update total
	function updateTotal() {
		const totalElements = document.querySelectorAll( '.total' );
		let totalCart = 0;
		totalElements.forEach( function( element ) {
			const price = parseFloat( element.getAttribute( 'data-price' ) );
			const quantityInput = element.parentElement.querySelector( '.quantity-input' );
			if ( quantityInput !== null ) {
				const quantity = parseInt( quantityInput.value );
				const totalProduct = price * quantity;
				totalCart += totalProduct;
				element.textContent = totalProduct.toLocaleString( 'vi-VN' ) + ' VNĐ';
			}
		} );

		// Update total cart amount
		const totalCartElement = document.querySelector( '#total-cart' );
		if ( totalCartElement ) {
			totalCartElement.textContent = totalCart.toLocaleString( 'vi-VN' ) + ' VNĐ';
		}

		// Update product names
		const productNamesElement = document.querySelector( '#product-names' );
		if ( productNamesElement ) {
			const productNames = Array.from( totalElements ).map( function( element ) {
				const productName = element.parentElement.querySelector( '.img-product' ).querySelector( 'p' ).textContent;
				const quantity = element.parentElement.querySelector( '.quantity-input' ).value;
				return productName + ' x ' + quantity;
			} ).join( ', ' );
			productNamesElement.textContent = productNames;
		}

		// Update sub-total and grand total
		const subTotal = totalCart;
		document.querySelector( '#sub-total' ).textContent = subTotal.toLocaleString( 'vi-VN' ) + ' VNĐ';
		const grandTotal = subTotal;
		document.querySelector( '#grand-total' ).textContent = grandTotal.toLocaleString( 'vi-VN' ) + ' VNĐ';
	}

	// Add event listeners for quantity input changes
	const quantityInputs = document.querySelectorAll( '.quantity-input' );
	quantityInputs.forEach( function( input ) {
		input.addEventListener( 'change', function() {
			handleQuantityInputChange( input );
		} );
	} );

	// Function to handle increment button click
	const incrementBtns = document.querySelectorAll( '.increment-btn' );
	incrementBtns.forEach( function( btn ) {
		btn.addEventListener( 'click', function() {
			const quantityInput = btn.parentElement.querySelector( '.quantity-input' );
			const currentValue = parseInt( quantityInput.value );
			quantityInput.value = currentValue + 1;
			handleQuantityInputChange( quantityInput );
		} );
	} );

	// Function to handle decrement button click
	const decrementBtns = document.querySelectorAll( '.decrement-btn' );
	decrementBtns.forEach( function( btn ) {
		btn.addEventListener( 'click', function() {
			const quantityInput = btn.parentElement.querySelector( '.quantity-input' );
			const currentValue = parseInt( quantityInput.value );
			if ( currentValue > 1 ) {
				quantityInput.value = currentValue - 1;
				handleQuantityInputChange( quantityInput );
			}
		} );
	} );

	// Call updateTotal function to update total quantities on page load
	updateTotal();
} );
