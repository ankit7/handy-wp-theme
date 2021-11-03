<style>
	.modal-newsletter {
		color: #9f9f9f;
		width: 525px;
		font-size: 15px;
	}

	.modal-newsletter .modal-content {
		padding: 40px 50px;
		border-radius: 1px;
		border: none;
	}

	.modal-newsletter .modal-header {
		border-bottom: none;
		position: relative;
		text-align: center;
		border-radius: 5px 5px 0 0;
	}

	.modal-newsletter .close {
		position: absolute;
		top: -25px;
		right: -35px;
		color: #c0c3c8;
		text-shadow: none;
		opacity: 0.5;
		font-size: 26px;
		font-weight: normal;
	}

	.modal-newsletter .close:hover {
		opacity: 0.8;
	}

	.modal-newsletter .form-control,
	.modal-newsletter .btn {
		min-height: 46px;
		text-align: center;
		border-radius: 1px;
	}

	.modal-newsletter .form-control {
		box-shadow: none;
		background: #f5f5f5;
		border-color: #d5d5d5;
	}

	.modal-newsletter .form-control:focus {
		border-color: #ccc;
		box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
	}

	.modal-newsletter .btn {
		color: #fff;
		background: #353535;
		text-decoration: none;
		transition: all 0.4s;
		line-height: normal;
		padding: 6px 20px;
		border: none;
		margin-top: 20px;
		text-transform: uppercase;
	}

	.modal-newsletter .btn:hover,
	.modal-newsletter .btn:focus {
		background: #171717;
		outline: none;
		box-shadow: 0 0 8px rgba(0, 0, 0, 0.4);
	}

	.modal-newsletter .form-group {
		padding: 0 20px;
		margin-top: 30px;
	}

	.modal-newsletter .footer-link {
		margin-top: 20px;
		min-height: 25px;
	}

	.modal-newsletter .footer-link a {
		color: #353535;
		display: inline-block;
		border-bottom: 2px solid;
		font-weight: bold;
		text-align: center;
		text-transform: uppercase;
		font-size: 14px;
	}

	.modal-newsletter .footer-link a:hover,
	.modal-newsletter .footer-link a:focus {
		text-decoration: none;
		border: none;
	}
</style>
<div id="newsletterBanner" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content">
			<form
				action="https://b23c3e9e.sibforms.com/serve/MUIEACf8fFNOo7-iiFbqCtzYXJeDKhwU5zaXkZ7VpFDFaGDNo4g1cuJuixgVKEBa-ecH4gC3vsJb6ouYtJzbGy0AzskjFss0TMV1lPqADVOMM8W2aJmK_ZDKyG7TQK6sCnR6l6nvIbQIZbw_2fQscNB-zAdVCExswqYAy6ws819Mjw9bgBA9ppssfQdVtVWbVJcPogiudLRg0fhq"
				method="post">
				<div class="modal-header">
					<h2 class="my-0 mx-auto">Join Our Newsletter</h2>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
				</div>
				<div class="modal-body text-center">
					<p>Subscribe our newsletter to receive the latest news/tips and exclusive offers. No spam.</p>
					<div class="form-group">
						<input type="email" class="form-control" name="EMAIL" placeholder="Enter your email" required>
						<input type="submit" class="btn btn-primary btn-block" value="Subscribe">
					</div>
					<div class="footer-link"><a href="#" data-dismiss="modal">No Thanks</a></div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	// newsletter modal
	if (location.search.includes('utm_content=kendra')) {
		setTimeout(() => {
			jQuery('#newsletterBanner').modal('show');
		}, 30 * 1000);
	}

</script>