import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
 
const blockStyle = {
    backgroundColor: '#900',
    color: '#fff',
    padding: '20px',
};
 
registerBlockType( 'page-banner-esnext', {
    apiVersion: 1,
    title: 'page banner',
    icon: 'universal-access-alt',
    category: 'design',
    example: {},
    edit() {
        const blockProps = useBlockProps( { style: blockStyle } );
 
        return <div { ...blockProps }>Hello World, step 1 (from the editor).</div>;
    },
    save() {
        const blockProps = useBlockProps.save( { style: blockStyle } );
 
        return <div { ...blockProps }>Hello World, step 1 (from the frontend).</div>;
    },
} );