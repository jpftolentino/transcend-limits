import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	const { logoUrl, logoAlt } = attributes;

	return (
		<div { ...useBlockProps.save() }>
			<div className="transcend-site-header__inner">
				<div className="transcend-site-header__brand">
					{ logoUrl && (
						<a href="/">
							<img
								src={ logoUrl }
								alt={ logoAlt }
							/>
						</a>
					) }
				</div>

				<nav
					className="transcend-site-header__nav"
					aria-label="Primary navigation"
				>
					<a href="/">Home</a>
					<a href="/news/">News</a>
					<a href="/about/">About</a>
					<a href="/contact/">Contact</a>
				</nav>
			</div>
		</div>
	);
}