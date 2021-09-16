import PropTypes from 'prop-types'


const Header = ({name}) => {
    return (
       <header>
           <h1>Task Tracker, Hello {name} </h1>
       </header>
    )
}

Header.defaultProps = {
    name: 'NoName'
}

Header.propTypes = {
    name: PropTypes.string
}

export default Header

