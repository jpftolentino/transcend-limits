import { __ } from '@wordpress/i18n';
import {
	MediaUpload,
	MediaUploadCheck,
	PlainText,
	useBlockProps,
} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
	const {
		title,
		imageId,
		imageUrl,
		imageAlt,
		ctaText,
		ctaUrl,
	} = attributes;

	const onSelectImage = ( media ) => {
		setAttributes( {
			imageId: media.id,
			imageUrl: media.url,
			imageAlt: media.alt || media.title || '',
		} );
	};

	return (
		<div { ...useBlockProps() }>
<div className="transcend-hero transcend-hero--editor">
	<div className="transcend-hero__image-selector">
					<MediaUploadCheck>
						<MediaUpload
							onSelect={ onSelectImage }
							allowedTypes={ [ 'image' ] }
							value={ imageId }
							render={ ( { open } ) => (
								<>
									{ imageUrl ? (
										<>
											<img
												src={ imageUrl }
												alt={ imageAlt }
											/>

											<Button
												variant="secondary"
												onClick={ open }
											>
												{ __(
													'Change image',
													'transcend-blocks'
												) }
											</Button>
										</>
									) : (
										<Button
											variant="secondary"
											onClick={ open }
										>
											{ __(
												'Select hero image',
												'transcend-blocks'
											) }
										</Button>
									) }
								</>
							) }
						/>
					</MediaUploadCheck>
				</div>

				<div className="transcend-hero__content transcend-hero__editor-content">
					<PlainText
						tagName="h1"
						value={ title }
						onChange={ ( value ) =>
							setAttributes( { title: value } )
						}
						placeholder={ __(
							'Hero title',
							'transcend-blocks'
						) }
					/>

					<PlainText
						tagName="p"
						value={ ctaText }
						onChange={ ( value ) =>
							setAttributes( { ctaText: value } )
						}
						placeholder={ __(
							'CTA text',
							'transcend-blocks'
						) }
					/>

					<PlainText
						value={ ctaUrl }
						onChange={ ( value ) =>
							setAttributes( { ctaUrl: value } )
						}
						placeholder={ __(
							'CTA URL',
							'transcend-blocks'
						) }
					/>

					{ ctaUrl && (
						<a
							className="transcend-hero__button"
							href={ ctaUrl }
						>
							{ __(
								'Explore the Stories',
								'transcend-blocks'
							) }
						</a>
					) }
				</div>
			</div>
		</div>
	);
}

