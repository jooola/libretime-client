# coding: utf-8

"""
    LibreTime API

    Radio Broadcast & Automation Platform  # noqa: E501

    The version of the OpenAPI document: 2.0.0
    Generated by: https://openapi-generator.tech
"""

from datetime import date, datetime  # noqa: F401
import decimal  # noqa: F401
import functools  # noqa: F401
import io  # noqa: F401
import re  # noqa: F401
import typing  # noqa: F401
import typing_extensions  # noqa: F401
import uuid  # noqa: F401

import frozendict  # noqa: F401

from libretime_client import schemas  # noqa: F401


class CeleryTask(
    schemas.DictSchema
):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """


    class MetaOapg:
        required = {
            "task_id",
            "id",
            "track_reference",
            "status",
        }
        
        class properties:
            id = schemas.IntSchema
            
            
            class task_id(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 256
            
            
            class status(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 256
            track_reference = schemas.IntSchema
            
            
            class name(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
                    max_length = 256
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'name':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class dispatch_time(
                schemas.DateTimeBase,
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
                    format = 'date-time'
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, datetime, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'dispatch_time':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            __annotations__ = {
                "id": id,
                "task_id": task_id,
                "status": status,
                "track_reference": track_reference,
                "name": name,
                "dispatch_time": dispatch_time,
            }
    
    task_id: MetaOapg.properties.task_id
    id: MetaOapg.properties.id
    track_reference: MetaOapg.properties.track_reference
    status: MetaOapg.properties.status
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["task_id"]) -> MetaOapg.properties.task_id: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["status"]) -> MetaOapg.properties.status: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["track_reference"]) -> MetaOapg.properties.track_reference: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["name"]) -> MetaOapg.properties.name: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["dispatch_time"]) -> MetaOapg.properties.dispatch_time: ...
    
    @typing.overload
    def __getitem__(self, name: str) -> schemas.UnsetAnyTypeSchema: ...
    
    def __getitem__(self, name: typing.Union[typing_extensions.Literal["id", "task_id", "status", "track_reference", "name", "dispatch_time", ], str]):
        # dict_instance[name] accessor
        return super().__getitem__(name)
    
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["task_id"]) -> MetaOapg.properties.task_id: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["status"]) -> MetaOapg.properties.status: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["track_reference"]) -> MetaOapg.properties.track_reference: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["name"]) -> typing.Union[MetaOapg.properties.name, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["dispatch_time"]) -> typing.Union[MetaOapg.properties.dispatch_time, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: str) -> typing.Union[schemas.UnsetAnyTypeSchema, schemas.Unset]: ...
    
    def get_item_oapg(self, name: typing.Union[typing_extensions.Literal["id", "task_id", "status", "track_reference", "name", "dispatch_time", ], str]):
        return super().get_item_oapg(name)
    

    def __new__(
        cls,
        *_args: typing.Union[dict, frozendict.frozendict, ],
        task_id: typing.Union[MetaOapg.properties.task_id, str, ],
        id: typing.Union[MetaOapg.properties.id, decimal.Decimal, int, ],
        track_reference: typing.Union[MetaOapg.properties.track_reference, decimal.Decimal, int, ],
        status: typing.Union[MetaOapg.properties.status, str, ],
        name: typing.Union[MetaOapg.properties.name, None, str, schemas.Unset] = schemas.unset,
        dispatch_time: typing.Union[MetaOapg.properties.dispatch_time, None, str, datetime, schemas.Unset] = schemas.unset,
        _configuration: typing.Optional[schemas.Configuration] = None,
        **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
    ) -> 'CeleryTask':
        return super().__new__(
            cls,
            *_args,
            task_id=task_id,
            id=id,
            track_reference=track_reference,
            status=status,
            name=name,
            dispatch_time=dispatch_time,
            _configuration=_configuration,
            **kwargs,
        )
