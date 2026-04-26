/* eslint-disable-next-line */
panel.plugin("afternoon-light/blocks", {
	components: {
		BlockWrapper: {
			props: ["fieldset"],
			template: `
				<div style="display: grid; gap: var(--spacing-4);">
					<k-block-title :fieldset="fieldset" style="color: var(--color-gray-600);" />
					<div style="background-color: var(--theme-color-200); padding: var(--spacing-4); border-radius: var(--rounded);">
						<slot />
					</div>
				</div>
			`,
		},
	},
	blocks: {
		body_text: `
			<block-wrapper :fieldset="{ icon: 'text', name: 'Body Text' }">
				<k-writer-field
					label="Text"
					:marks="['italic', 'link']"
					:nodes="false"
					:value="content.text"
					@input="update({ text: $event })"
				/>
			</block-wrapper>
		`,
		header_text: `
			<block-wrapper :fieldset="{ icon: 'text', name: 'Header Text' }">
				<k-writer-field
					label="Text"
					:marks="false"
					:nodes="false"
					:value="content.text"
					@input="update({ text: $event })"
				/>
			</block-wrapper>
		`,
		header_figure: `
			<block-wrapper :fieldset="{ icon: 'text', name: 'Header Figure' }">
				<k-grid style="gap: var(--spacing-4); --columns: 2">
					<k-writer-field
						style="--width: 1/2"
						label="Title"
						:marks="false"
						:nodes="false"
						:value="content.title"
						@input="update({ title: $event })"
					/>
					<k-files-field
						style="--width: 1/2"
						:disabled="true"
						label="Image"
						:value="content.image"
						@input="update({ image: $event })"
					/>
					<k-writer-field
						style="--width: 2/2"
						label="Text"
						:marks="false"
						:nodes="false"
						:value="content.text"
						@input="update({ text: $event })"
					/>
				</k-grid>
			</block-wrapper>
		`,
		labeled_description: `
			<block-wrapper :fieldset="{ icon: 'text', name: 'Labeled Description' }">
				<k-grid style="gap: var(--spacing-4); --columns: 3">
					<k-text-field
						style="--width: 1/3"
						label="Label"
						:value="content.label"
						@input="update({ label: $event })"
					/>
					<k-writer-field
						style="--width: 2/3"
						label="Description"
						:marks="false"
						:nodes="false"
						:value="content.description"
						@input="update({ description: $event })"
					/>
				</k-grid>
			</block-wrapper>
		`,
		featured_exhibitors: `
			<block-wrapper :fieldset="{ icon: 'text', name: 'Featured Exhibitors' }">
				<k-structure-field
					label="Featured Exhibitors"
					:disabled="true"
					:fields="{
						image: { label: 'Image', type: 'files', multiple: false },
						name: { label: 'Name', type: 'text' },
						link: { label: 'Link', type: 'url' }
					}"
					:columns="{
						image: { label: 'Image', width: '1/3' },
						name: { label: 'Name', width: '1/3' },
						link: { label: 'Link', width: '1/3' }
					}"
					:value="content.exhibitors"
					@input="update({ exhibitors: $event })"
				/>
			</block-wrapper>
		`,
	},
});
