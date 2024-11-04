module.exports = {
	content: ["**/*.{html,php,svg}", "js/custom.js", "../../**/*.php"],
	theme: {
		extend: {
			colors: {
				'dark-orange': '#FF4D04',
				'little-orange':'#d44001',
				'light-black': '#1D1D1D',
				'dark-black': '#0F0F0F',
				'box-black': '#222222',
				'light-gray': '#f9f9f9',
				'faq-bg':'#F2F2F2B2',
				'list-bg': '#F0F0F046',
				'dark-pink': '#FF005B',
				'footer-menu-color': '#aba4a4',
				'blog-table':'#FAFAFA4D',
				'main-gray':'#1d1d1da8'
			}
		},
	},
	plugins: [
		require('@tailwindcss/forms'),
	],
}
