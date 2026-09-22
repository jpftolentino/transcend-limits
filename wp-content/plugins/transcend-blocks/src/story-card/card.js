export default function StoryCard( {
	title,
	excerpt,
	imageUrl,
	imageAlt,
	url,
} ) {
	return (
		<article>
			{ imageUrl && (
				<img
					src={ imageUrl }
					alt={ imageAlt }
				/>
			) }

			{ title }

			{ excerpt }

			{ url && (
				<a href={ url }>
					Read Story
				</a>
			) }
		</article>
	);
}