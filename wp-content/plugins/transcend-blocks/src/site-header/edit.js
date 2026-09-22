import { __ } from '@wordpress/i18n';
import {
	MediaUpload,
	MediaUploadCheck,
	useBlockProps,
} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
	const { logoId, logoUrl, logoAlt } = attributes;

	const onSelectLogo = ( media ) => {
		setAttributes( {
			logoId: media.id,
			logoUrl: media.url,
			logoAlt: media.alt || media.title,
		} );
	};

	return (
		<div { ...useBlockProps() }>
			<div className="transcend-site-header__inner">
				<div className="transcend-site-header__brand">
					<MediaUploadCheck>
						<MediaUpload
							onSelect={ onSelectLogo }
							allowedTypes={ [ 'image' ] }
							value={ logoId }
							render={ ( { open } ) => (
								<>
									{ logoUrl ? (
										<Button
											className="transcend-site-header__logo-button"
											onClick={ open }
										>
											<img
												src={ logoUrl }
												alt={ logoAlt }
											/>
										</Button>
									) : (
										<Button
											variant="secondary"
											onClick={ open }
										>
											{ __(
												'Select signature',
												'transcend-blocks'
											) }
										</Button>
									) }
								</>
							) }
						/>
					</MediaUploadCheck>
				</div>

				<nav
					className="transcend-site-header__nav"
					aria-label={ __(
						'Primary navigation',
						'transcend-blocks'
					) }
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