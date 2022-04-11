"""
    LibreTime API

    Radio Broadcast & Automation Platform  # noqa: E501

    The version of the OpenAPI document: 2.0.0
    Generated by: https://openapi-generator.tech
"""


import re  # noqa: F401
import sys  # noqa: F401

from libretime_client.api_client import ApiClient, Endpoint as _Endpoint
from libretime_client.model_utils import (  # noqa: F401
    check_allowed_values,
    check_validations,
    date,
    datetime,
    file_type,
    none_type,
    validate_and_convert_types
)
from libretime_client.model.patched_schedule import PatchedSchedule
from libretime_client.model.schedule import Schedule


class ScheduleApi(object):
    """NOTE: This class is auto generated by OpenAPI Generator
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client
        self.schedule_create_endpoint = _Endpoint(
            settings={
                'response_type': (Schedule,),
                'auth': [
                    'basicAuth',
                    'cookieAuth'
                ],
                'endpoint_path': '/api/v2/schedule/',
                'operation_id': 'schedule_create',
                'http_method': 'POST',
                'servers': None,
            },
            params_map={
                'all': [
                    'schedule',
                ],
                'required': [
                    'schedule',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'schedule':
                        (Schedule,),
                },
                'attribute_map': {
                },
                'location_map': {
                    'schedule': 'body',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [
                    'application/json',
                    'application/x-www-form-urlencoded',
                    'multipart/form-data'
                ]
            },
            api_client=api_client
        )
        self.schedule_destroy_endpoint = _Endpoint(
            settings={
                'response_type': None,
                'auth': [
                    'basicAuth',
                    'cookieAuth'
                ],
                'endpoint_path': '/api/v2/schedule/{id}/',
                'operation_id': 'schedule_destroy',
                'http_method': 'DELETE',
                'servers': None,
            },
            params_map={
                'all': [
                    'id',
                ],
                'required': [
                    'id',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'id':
                        (int,),
                },
                'attribute_map': {
                    'id': 'id',
                },
                'location_map': {
                    'id': 'path',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [],
                'content_type': [],
            },
            api_client=api_client
        )
        self.schedule_list_endpoint = _Endpoint(
            settings={
                'response_type': ([Schedule],),
                'auth': [
                    'basicAuth',
                    'cookieAuth'
                ],
                'endpoint_path': '/api/v2/schedule/',
                'operation_id': 'schedule_list',
                'http_method': 'GET',
                'servers': None,
            },
            params_map={
                'all': [
                    'broadcasted',
                    'broadcasted__gt',
                    'broadcasted__gte',
                    'broadcasted__lt',
                    'broadcasted__lte',
                    'broadcasted__range',
                    'ends',
                    'ends__gt',
                    'ends__gte',
                    'ends__lt',
                    'ends__lte',
                    'ends__range',
                    'is_valid',
                    'playout_status',
                    'playout_status__gt',
                    'playout_status__gte',
                    'playout_status__lt',
                    'playout_status__lte',
                    'playout_status__range',
                    'starts',
                    'starts__gt',
                    'starts__gte',
                    'starts__lt',
                    'starts__lte',
                    'starts__range',
                ],
                'required': [],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'broadcasted':
                        (int,),
                    'broadcasted__gt':
                        (int,),
                    'broadcasted__gte':
                        (int,),
                    'broadcasted__lt':
                        (int,),
                    'broadcasted__lte':
                        (int,),
                    'broadcasted__range':
                        ([int],),
                    'ends':
                        (datetime,),
                    'ends__gt':
                        (datetime,),
                    'ends__gte':
                        (datetime,),
                    'ends__lt':
                        (datetime,),
                    'ends__lte':
                        (datetime,),
                    'ends__range':
                        ([datetime],),
                    'is_valid':
                        (bool,),
                    'playout_status':
                        (int,),
                    'playout_status__gt':
                        (int,),
                    'playout_status__gte':
                        (int,),
                    'playout_status__lt':
                        (int,),
                    'playout_status__lte':
                        (int,),
                    'playout_status__range':
                        ([int],),
                    'starts':
                        (datetime,),
                    'starts__gt':
                        (datetime,),
                    'starts__gte':
                        (datetime,),
                    'starts__lt':
                        (datetime,),
                    'starts__lte':
                        (datetime,),
                    'starts__range':
                        ([datetime],),
                },
                'attribute_map': {
                    'broadcasted': 'broadcasted',
                    'broadcasted__gt': 'broadcasted__gt',
                    'broadcasted__gte': 'broadcasted__gte',
                    'broadcasted__lt': 'broadcasted__lt',
                    'broadcasted__lte': 'broadcasted__lte',
                    'broadcasted__range': 'broadcasted__range',
                    'ends': 'ends',
                    'ends__gt': 'ends__gt',
                    'ends__gte': 'ends__gte',
                    'ends__lt': 'ends__lt',
                    'ends__lte': 'ends__lte',
                    'ends__range': 'ends__range',
                    'is_valid': 'is_valid',
                    'playout_status': 'playout_status',
                    'playout_status__gt': 'playout_status__gt',
                    'playout_status__gte': 'playout_status__gte',
                    'playout_status__lt': 'playout_status__lt',
                    'playout_status__lte': 'playout_status__lte',
                    'playout_status__range': 'playout_status__range',
                    'starts': 'starts',
                    'starts__gt': 'starts__gt',
                    'starts__gte': 'starts__gte',
                    'starts__lt': 'starts__lt',
                    'starts__lte': 'starts__lte',
                    'starts__range': 'starts__range',
                },
                'location_map': {
                    'broadcasted': 'query',
                    'broadcasted__gt': 'query',
                    'broadcasted__gte': 'query',
                    'broadcasted__lt': 'query',
                    'broadcasted__lte': 'query',
                    'broadcasted__range': 'query',
                    'ends': 'query',
                    'ends__gt': 'query',
                    'ends__gte': 'query',
                    'ends__lt': 'query',
                    'ends__lte': 'query',
                    'ends__range': 'query',
                    'is_valid': 'query',
                    'playout_status': 'query',
                    'playout_status__gt': 'query',
                    'playout_status__gte': 'query',
                    'playout_status__lt': 'query',
                    'playout_status__lte': 'query',
                    'playout_status__range': 'query',
                    'starts': 'query',
                    'starts__gt': 'query',
                    'starts__gte': 'query',
                    'starts__lt': 'query',
                    'starts__lte': 'query',
                    'starts__range': 'query',
                },
                'collection_format_map': {
                    'broadcasted__range': 'csv',
                    'ends__range': 'csv',
                    'playout_status__range': 'csv',
                    'starts__range': 'csv',
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [],
            },
            api_client=api_client
        )
        self.schedule_partial_update_endpoint = _Endpoint(
            settings={
                'response_type': (Schedule,),
                'auth': [
                    'basicAuth',
                    'cookieAuth'
                ],
                'endpoint_path': '/api/v2/schedule/{id}/',
                'operation_id': 'schedule_partial_update',
                'http_method': 'PATCH',
                'servers': None,
            },
            params_map={
                'all': [
                    'id',
                    'patched_schedule',
                ],
                'required': [
                    'id',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'id':
                        (int,),
                    'patched_schedule':
                        (PatchedSchedule,),
                },
                'attribute_map': {
                    'id': 'id',
                },
                'location_map': {
                    'id': 'path',
                    'patched_schedule': 'body',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [
                    'application/json',
                    'application/x-www-form-urlencoded',
                    'multipart/form-data'
                ]
            },
            api_client=api_client
        )
        self.schedule_retrieve_endpoint = _Endpoint(
            settings={
                'response_type': (Schedule,),
                'auth': [
                    'basicAuth',
                    'cookieAuth'
                ],
                'endpoint_path': '/api/v2/schedule/{id}/',
                'operation_id': 'schedule_retrieve',
                'http_method': 'GET',
                'servers': None,
            },
            params_map={
                'all': [
                    'id',
                ],
                'required': [
                    'id',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'id':
                        (int,),
                },
                'attribute_map': {
                    'id': 'id',
                },
                'location_map': {
                    'id': 'path',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [],
            },
            api_client=api_client
        )
        self.schedule_update_endpoint = _Endpoint(
            settings={
                'response_type': (Schedule,),
                'auth': [
                    'basicAuth',
                    'cookieAuth'
                ],
                'endpoint_path': '/api/v2/schedule/{id}/',
                'operation_id': 'schedule_update',
                'http_method': 'PUT',
                'servers': None,
            },
            params_map={
                'all': [
                    'id',
                    'schedule',
                ],
                'required': [
                    'id',
                    'schedule',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'id':
                        (int,),
                    'schedule':
                        (Schedule,),
                },
                'attribute_map': {
                    'id': 'id',
                },
                'location_map': {
                    'id': 'path',
                    'schedule': 'body',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [
                    'application/json',
                    'application/x-www-form-urlencoded',
                    'multipart/form-data'
                ]
            },
            api_client=api_client
        )

    def schedule_create(
        self,
        schedule,
        **kwargs
    ):
        """schedule_create  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.schedule_create(schedule, async_req=True)
        >>> result = thread.get()

        Args:
            schedule (Schedule):

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            _request_auths (list): set to override the auth_settings for an a single
                request; this effectively ignores the authentication
                in the spec for a single request.
                Default is None
            async_req (bool): execute request asynchronously

        Returns:
            Schedule
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['_request_auths'] = kwargs.get('_request_auths', None)
        kwargs['schedule'] = \
            schedule
        return self.schedule_create_endpoint.call_with_http_info(**kwargs)

    def schedule_destroy(
        self,
        id,
        **kwargs
    ):
        """schedule_destroy  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.schedule_destroy(id, async_req=True)
        >>> result = thread.get()

        Args:
            id (int): A unique integer value identifying this schedule.

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            _request_auths (list): set to override the auth_settings for an a single
                request; this effectively ignores the authentication
                in the spec for a single request.
                Default is None
            async_req (bool): execute request asynchronously

        Returns:
            None
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['_request_auths'] = kwargs.get('_request_auths', None)
        kwargs['id'] = \
            id
        return self.schedule_destroy_endpoint.call_with_http_info(**kwargs)

    def schedule_list(
        self,
        **kwargs
    ):
        """schedule_list  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.schedule_list(async_req=True)
        >>> result = thread.get()


        Keyword Args:
            broadcasted (int): [optional]
            broadcasted__gt (int): [optional]
            broadcasted__gte (int): [optional]
            broadcasted__lt (int): [optional]
            broadcasted__lte (int): [optional]
            broadcasted__range ([int]): Multiple values may be separated by commas.. [optional]
            ends (datetime): [optional]
            ends__gt (datetime): [optional]
            ends__gte (datetime): [optional]
            ends__lt (datetime): [optional]
            ends__lte (datetime): [optional]
            ends__range ([datetime]): Multiple values may be separated by commas.. [optional]
            is_valid (bool): Filter on valid instances. [optional]
            playout_status (int): [optional]
            playout_status__gt (int): [optional]
            playout_status__gte (int): [optional]
            playout_status__lt (int): [optional]
            playout_status__lte (int): [optional]
            playout_status__range ([int]): Multiple values may be separated by commas.. [optional]
            starts (datetime): [optional]
            starts__gt (datetime): [optional]
            starts__gte (datetime): [optional]
            starts__lt (datetime): [optional]
            starts__lte (datetime): [optional]
            starts__range ([datetime]): Multiple values may be separated by commas.. [optional]
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            _request_auths (list): set to override the auth_settings for an a single
                request; this effectively ignores the authentication
                in the spec for a single request.
                Default is None
            async_req (bool): execute request asynchronously

        Returns:
            [Schedule]
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['_request_auths'] = kwargs.get('_request_auths', None)
        return self.schedule_list_endpoint.call_with_http_info(**kwargs)

    def schedule_partial_update(
        self,
        id,
        **kwargs
    ):
        """schedule_partial_update  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.schedule_partial_update(id, async_req=True)
        >>> result = thread.get()

        Args:
            id (int): A unique integer value identifying this schedule.

        Keyword Args:
            patched_schedule (PatchedSchedule): [optional]
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            _request_auths (list): set to override the auth_settings for an a single
                request; this effectively ignores the authentication
                in the spec for a single request.
                Default is None
            async_req (bool): execute request asynchronously

        Returns:
            Schedule
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['_request_auths'] = kwargs.get('_request_auths', None)
        kwargs['id'] = \
            id
        return self.schedule_partial_update_endpoint.call_with_http_info(**kwargs)

    def schedule_retrieve(
        self,
        id,
        **kwargs
    ):
        """schedule_retrieve  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.schedule_retrieve(id, async_req=True)
        >>> result = thread.get()

        Args:
            id (int): A unique integer value identifying this schedule.

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            _request_auths (list): set to override the auth_settings for an a single
                request; this effectively ignores the authentication
                in the spec for a single request.
                Default is None
            async_req (bool): execute request asynchronously

        Returns:
            Schedule
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['_request_auths'] = kwargs.get('_request_auths', None)
        kwargs['id'] = \
            id
        return self.schedule_retrieve_endpoint.call_with_http_info(**kwargs)

    def schedule_update(
        self,
        id,
        schedule,
        **kwargs
    ):
        """schedule_update  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.schedule_update(id, schedule, async_req=True)
        >>> result = thread.get()

        Args:
            id (int): A unique integer value identifying this schedule.
            schedule (Schedule):

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            _request_auths (list): set to override the auth_settings for an a single
                request; this effectively ignores the authentication
                in the spec for a single request.
                Default is None
            async_req (bool): execute request asynchronously

        Returns:
            Schedule
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['_request_auths'] = kwargs.get('_request_auths', None)
        kwargs['id'] = \
            id
        kwargs['schedule'] = \
            schedule
        return self.schedule_update_endpoint.call_with_http_info(**kwargs)

