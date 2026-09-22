import {
	InspectorControls,
	MediaUpload,
	MediaUploadCheck,
	RichText,
	useBlockProps,
} from '@wordpress/block-editor';

import {
	Button,
	PanelBody,
	TextControl,
} from '@wordpress/components';

import StoryCard from './card';

export default function Edit( { attributes, setAttributes } ) {
	const {
		title,
		excerpt,
		imageUrl,
		imageAlt,
		url,
	} = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title="Story Settings">
					<TextControl
						label="Story URL"
						value={ url }
						onChange={ ( value ) =>
							setAttributes( { url: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>

			<div { ...useBlockProps() }>
				<StoryCard
					imageUrl={ imageUrl }
					imageAlt={ imageAlt }
					title={
						<RichText
							tagName="h2"
							placeholder="Story title..."
							value={ title }
							onChange={ ( value ) =>
								setAttributes( { title: value } )
							}
						/>
					}
					excerpt={
						<RichText
							tagName="p"
							placeholder="Story excerpt..."
							value={ excerpt }
							onChange={ ( value ) =>
								setAttributes( { excerpt: value } )
							}
						/>
					}
					url={ url }
				/>

				<MediaUploadCheck>
					<MediaUpload
						onSelect={ ( media ) =>
							setAttributes( {
								imageUrl: media.url,
								imageAlt: media.alt || '',
							} )
						}
						allowedTypes={ [ 'image' ] }
						render={ ( { open } ) => (
							<Button onClick={ open }>
								{ imageUrl
									? 'Replace Image'
									: 'Select Image' }
							</Button>
						) }
					/>
				</MediaUploadCheck>
			</div>
		</>
	);
}