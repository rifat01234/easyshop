import React, { Component, Fragment} from "react";
import HomeSlider from './HomeSlider'
import {Container,Row,Col,Card} from 'react-bootstrap'
import AppURL from "../../api/AppURL";
import axios from 'axios'


class HomeTopMobile extends Component {
    Constructor(){
        super();
        this.state ={
            SliderData:[]
        }
    }

    componentDidMount(){       
        axios.get(AppURL.AllSlider).then(response =>{
            this.setState({SliderData:response.data});
        }).catch(error=>{ 

        });
    }

    render() {
        return(
            <Fragment>
                <Container className="p-0 m-0 overflow-hidden" fluid={true}>
                    <Row className="p-0 m-0 overflow-hidden">
                        <col lg={12} md={12} sm={12}>
                        <HomeSlider data={this.state.SliderData} />
                        </col>
                    </Row>
                </Container>
            </Fragment>
        )
    }
}

export default HomeTopMobile