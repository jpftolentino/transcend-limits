import { RichText, useBlockProps } from '@wordpress/block-editor';

import StoryCard from './card';

export default function save( { attributes } ) {
	const {
		title,
		excerpt,
		imageUrl,
		imageAlt,
		url,
	} = attributes;

	return (
		<div { ...useBlockProps.save() }>
			<StoryCard
				imageUrl={ imageUrl }
				imageAlt={ imageAlt }
				title={
					<RichText.Content
						tagName="h2"
						value={ title }
					/>
				}
				excerpt={
					<RichText.Content
						tagName="p"
						value={ excerpt }
					/>
				}
				url={ url }
			/>
		</div>
	);
}