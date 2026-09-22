import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	const {
		title,
		imageUrl,
		imageAlt,
		ctaText,
		ctaUrl,
	} = attributes;

	return (
		<div { ...useBlockProps.save() }>
			<section className="transcend-hero">
				{ imageUrl && (
					<img
						className="transcend-hero__image"
						src={ imageUrl }
						alt={ imageAlt }
					/>
				) }

				<div className="transcend-hero__content">
					{ title && <h1>{ title }</h1> }

					{ ctaText && <p>{ ctaText }</p> }

					{ ctaUrl && (
						<a
							className="transcend-hero__button"
							href={ ctaUrl }
						>
							Explore the Stories
						</a>
					) }
				</div>
			</section>
		</div>
	);
}