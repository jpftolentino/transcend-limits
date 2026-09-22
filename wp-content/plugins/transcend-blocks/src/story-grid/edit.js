import { useSelect } from '@wordpress/data';
import { useBlockProps } from '@wordpress/block-editor';
import { decodeEntities } from '@wordpress/html-entities';

import StoryCard from '../story-card/card';

function getText( value = '' ) {
	return decodeEntities(
		value.replace( /<[^>]*>/g, '' )
	);
}

export default function Edit() {
	const stories = useSelect(
		( select ) =>
			select( 'core' ).getEntityRecords(
				'postType',
				'story',
				{
					status: 'publish',
					per_page: 6,
					_embed: true,
				}
			),
		[]
	);

	const blockProps = useBlockProps();

	if ( stories === null ) {
		return (
			<div { ...blockProps }>
				<p>Loading stories...</p>
			</div>
		);
	}

	if ( ! stories.length ) {
		return (
			<div { ...blockProps }>
				<p>No stories found.</p>
			</div>
		);
	}

	return (
		<div { ...blockProps }>
			{ stories.map( ( story ) => {
				const featuredMedia =
					story._embedded?.[
						'wp:featuredmedia'
					]?.[ 0 ];

				return (
					<StoryCard
						key={ story.id }
						title={ getText(
							story.title?.rendered
						) }
						excerpt={ getText(
							story.excerpt?.rendered
						) }
						imageUrl={
							featuredMedia?.source_url || ''
						}
						imageAlt={
							featuredMedia?.alt_text || ''
						}
						url={ story.link }
					/>
				);
			} ) }
		</div>
	);
}